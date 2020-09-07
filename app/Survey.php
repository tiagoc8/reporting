<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function answer()
    {
        return $this->hasMany('App\Answer');
    }
}
