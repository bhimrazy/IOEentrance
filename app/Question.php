<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }
    public function options()
    {
        return $this->hasMany('App\Option');
    }
    public function correctanswer(){
        return $this->hasOne('App\Correctanswer');
    }
}
