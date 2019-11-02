<?php

namespace Modules\UserManager\Entities;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    protected $fillable = ['trasport_type','email_notification','phone_notification','email_for_notification','phone_for_notification','user_id'];
}
