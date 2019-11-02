<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Database\Eloquent\SoftDeletes;

class Register extends Model
{
    use SoftDeletes;

	protected $table = 'users';

	protected $primaryKey = 'id';

	public $incrementing = true;

	protected $dates = ['deleted_at']; 

	protected $fillable = [
		'fisrt_name',
		'last_name',
		'middle_name',
		'dob',
		'email',
		'mobile',
		'phone',
		'password',
		'status'
	];
}
