<?php

namespace Modules\UserManager\Entities;

use Illuminate\Database\Eloquent\Model;

class UserSubscription extends Model
{
    protected $fillable = ['user_id','plan_id','paypal_plan_id','status','subscription_ends_at','agreement_id'];
    public function plan()
    {
        return $this->belongsTo(\Modules\SubscriptionManager\Entities\SubscriptionPlan::class);
    }
}
