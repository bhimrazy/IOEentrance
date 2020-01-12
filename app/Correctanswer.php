<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Correctanswer extends Model
{
    protected $guarded=[];
    public function question(){
        return $this->belongsTo('App\Question');
    }
}
