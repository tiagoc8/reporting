<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $fillable = [
        'name', 'hash', 'customer_id',
    ];


    public function customer(){
        
        return $this->belongsTo('App\Customer');
    
    }

    public function answer(){
        
        return $this->hasOne('App\Answer');
    
    }

    public function answers(){
        
        return $this->hasOne('App\Answer');
    
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

}