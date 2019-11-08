<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocalPost extends Model
{
    public function division()
    {
        return $this->belongsTo('App\Division');
    }

    public function district()
    {
        return $this->belongsTo('App\District');
    }

    public function upazila()
    {
        return $this->belongsTo('App\Upazila');
    }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
