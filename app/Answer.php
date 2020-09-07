<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = "answers";

    protected $fillable = [
        'project_id',
        'question1',
        'question2',
        'question3',
        'question4',
        'question5',
        'question6',
        'question7',
    ];

    public function survey()
    {
        return $this->belongsTo('App\Survey');
    }

    public function project()
    {
        return $this->belongsTo('App\Project');

    }

    public function customer(){

        return $this->hasOneThrough('App\Customer', 'App\Project');
    }
}
