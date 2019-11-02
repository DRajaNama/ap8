<?php

namespace Modules\AdminUserManager\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Mail;

class AdminUser extends Authenticatable
{
    use Notifiable;

    protected $fillable = [];

    protected $hidden = [
        'password', 'remember_token',
    ];

     /*
     * Override default password notification
     */
    public function sendPasswordResetNotification($token)
    {
        $replacement['token'] = $token;
        $replacement['RESET_PASSWORD_URL'] = url("/admin/password/reset/{$token}");
        $data = ['template'=>'forgot-password-email','hooksVars' => $replacement];
        Mail::to(request('email'))->send(new \App\Mail\ManuMailer($data));
    }
    public function subscription($plan){
        echo 123;
    }
}
