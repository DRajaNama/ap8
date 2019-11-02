<?php

namespace Modules\UserManager\Entities;


use App\Events\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Mail;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    protected $fillable = ['contact_name','email','mobile','phone','username','password','status','is_verified','last_active','	email_verified_at','profle_photo','	remember_token','verification_token','abn'];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sluggable()
    {
        return [
            'dbfield' => 'username',
            'source' => 'first_name',
        ];
    }
     /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        static::saved(function ($model) {
          //  $model->sendRegEmail($model);
        });
        static::updating(function ($model) {
          //  $model->checkEmailVerified();
        });


    }
    public function setPasswordAttribute($pass)
    {
        if (!empty($pass)) {
            $this->attributes['password'] = Hash::make($pass);
            //Log::debug($pass. ' : ' . $this->attributes['password']);
        }
    }
    public function shipper()
    {
        return $this->hasOne(\Modules\UserManager\Entities\UserAddress::class, 'user_id')->where('address_type', '=' , 0);
    }
    public function postal()
    {
        return $this->hasOne(\Modules\UserManager\Entities\UserAddress::class, 'user_id')->where('address_type', '=' , 1);
    }
    public function profile()
    {
        return $this->hasOne(\Modules\UserManager\Entities\UserProfile::class, 'user_id');
    }
    public function addresses()
    {
        return $this->hasMany(\Modules\UserManager\Entities\UserAddress::class, 'user_id')->orderBy('is_default','DESC')->orderBy('address_type','ASC');
    }
    public function services()
    {
        return $this->hasMany(\Modules\UserManager\Entities\UserService::class, 'user_id');
    }
    public function user_preferences()
    {
        return $this->hasMany(\Modules\UserManager\Entities\UserPreference::class, 'user_id');
    }
    public function user_subscriptions()
    {
        return $this->hasMany(\Modules\UserManager\Entities\UserSubscription::class, 'user_id');
    }
    public function user_transactions()
    {
        return $this->hasMany(\Modules\UserManager\Entities\UserTransaction::class, 'user_id');
    }
    public function roles()
    {
        return $this->belongsToMany(\Modules\UserManager\Entities\Role::class);
    }

     /**
     * Scope a query to only include active users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeStatus($query, $status = null)
    {
        if ($status === '0' || $status == 1) {
            $query->where('status', $status);
        }
        return $query;
    }

    /**
     * CHECK IF USER HAS GIVEN ROLE.
     */
    public function hasRole($role)
    {

        return $this->roles()->where('title', $role)->exists();
    }

     /**
     * CHECK IF USER HAS GIVEN ROLE.
     */
    public function prefered_categories()
    {

        return $this->user_preferences()->where('filter_type', 0);
    }


    /**
     * CHECK IF USER HAS GIVEN ROLE.
     */
    public function prefered_pickup_states()
    {

        return $this->user_preferences()->where('filter_type', 1);
    }
    /**
     * CHECK IF USER HAS GIVEN ROLE.
     */
    public function prefered_delivery_states()
    {

        return $this->user_preferences()->where('filter_type', 2);
    }

     /**
     * CHECK IF USER HAS GIVEN ROLE.
     */
    public function activePlan()
    {

        return $this->user_subscriptions()->where('status', 1);
    }

    /**
     * if email changed then neet to be change verified status for reverify account
     * activate the user's account.
     * @return bool
     */
    protected function checkEmailVerified()
    {
        if ($this->getAttribute('email') && $this->getOriginal('email') != $this->getAttribute('email')) {
            $this->attributes['is_verified'] = 0;
        }
    }
   
    /**
     * Scope a query to only include filtered users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeFilter($query, $keyword)
    {
		 if (!empty($keyword)) {
            $query->where(function ($query) use ($keyword) {
                $query->where('contact_name', 'LIKE', '%' . $keyword . '%');
                $query->orWhere('email', 'LIKE', '%' . $keyword . '%');
                $query->orWhere('mobile', 'LIKE', '%' . $keyword . '%');
                $query->orWhere('phone', 'LIKE', '%' . $keyword . '%');
                $query->orWhere('username', 'LIKE', '%' . $keyword . '%');
            });
        }
        return $query;
    }

    public function sendRegEmail($model)
    {

         $userData = '';
            if ($model->getAttribute('password')) {
                $hook = "welcome-email";
                $verifyToken = strtoupper(\Illuminate\Support\Str::random(60));
                DB::table('users')
                    ->where('id', $model->id)
                    ->update(['verification_token' => $verifyToken]);
                $replacement['verify_n_password'] = url("user/verify/{$verifyToken}");
            } else {
                $token = app('auth.password.broker')->createToken($model);
                $replacement['token'] = $token;
                $hook = "create-new-password";
                $url = url("/users/password/reset/{$replacement['token']}");
                $replacement['CREATE_NEW_PASSWORD'] = $url;
            }
            $replacement['USER_INFO'] = $userData;
            $replacement['USER_NAME'] = $model->getAttribute('first_name');
            $replacement['USER_EMAIL'] = $model->getAttribute('email');

            $data = ['template' => $hook, 'hooksVars' => $replacement];
            // DB::table('password_resets')->insert([
            //     'email' => $model->getAttribute('email'),
            //     'token' => $token, //change 60 to any length you want
            //     'created_at' => Carbon::now()
            // ]);
            Mail::to($model->getAttribute('email'))->send(new \App\Mail\ManuMailer($data));

    }

    /*
     * Override default password notification
     */

    public function sendPasswordResetNotification($token)
    {
        $replacement['token'] = $token;
        $replacement['RESET_PASSWORD_URL'] = url("/password/reset/{$token}/?email=" . (base64_encode(request('email'))));
        $data = ['template' => 'forgot-password-email', 'hooksVars' => $replacement];
        Mail::to(request('email'))->send(new \App\Mail\ManuMailer($data));
    }
}
