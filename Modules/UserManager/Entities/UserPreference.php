<?php

namespace Modules\UserManager\Entities;

use Illuminate\Database\Eloquent\Model;

class UserPreference extends Model
{
    protected $fillable = ['user_id','alert_type','filter_type','value'];
    public function category()
    {
        return $this->belongsTo(\Modules\CargoCategoryManager\Entities\CargoCategory::class,'value','id');
    }
    public function state()
    {
        return $this->belongsTo(\Modules\UserManager\Entities\State::class,'value','id');
    }
}
