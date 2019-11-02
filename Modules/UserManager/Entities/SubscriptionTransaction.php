<?php

namespace Modules\UserManager\Entities;

use Illuminate\Database\Eloquent\Model;

class SubscriptionTransaction extends Model
{
    protected $fillable = ['subscription_id','transaction_id'];
}
