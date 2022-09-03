<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use softDeletes;

class Category extends Model
{



    protected $fillable = [
        'name'
    ];

    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
