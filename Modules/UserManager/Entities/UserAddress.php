<?php

namespace Modules\UserManager\Entities;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    protected $fillable = ['is_default','address','suburb','state_id','pincode','address_type','longitute','latitute','user_id'];
}
