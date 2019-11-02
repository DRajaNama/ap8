<?php

namespace Modules\EnquiryManager\Entities;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = ['name','mobile','email_address','message'];
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
                $query->where('name', 'LIKE', '%' . $keyword . '%');
                $query->orWhere('email_address', 'LIKE', '%' . $keyword . '%');
                $query->orWhere('message', 'LIKE', '%' . $keyword . '%');
                $query->orWhere('mobile', 'LIKE', '%' . $keyword . '%');
            });
        }
        return $query;
    }
}
