<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{

    public function category()
    {
        return $this->belongsTo('App\Category')->orderBy('id', 'DESC');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }


}
