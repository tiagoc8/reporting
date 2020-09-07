<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = [
        'name',
    ];

    public function projects(){
        
        return $this->hasMany('App\Project');
    
    }
    
    public function answers(){

        return $this->hasManyThrough('App\Answer', 'App\Project');
    }

}
