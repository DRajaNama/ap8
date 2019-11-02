<?php

namespace Modules\UserManager\Entities;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['user_id','role_id'];
}
