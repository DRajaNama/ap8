<?php

namespace Modules\UserManager\Entities;

use Illuminate\Database\Eloquent\Model;

class UserTransaction extends Model
{
    protected $fillable = ['user_id','amount','payment_token','payment_method','transaction_id','transaction_response','status'];
}
