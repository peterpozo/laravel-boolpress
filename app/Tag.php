<?php

namespace App;

use App\Traits\Slugger;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use Slugger;

    public $timestamps = false;

    public function posts() {
        return $this->belongsToMany('App\Post');
    }
}
