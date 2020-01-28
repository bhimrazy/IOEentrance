<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    protected $guarded=[];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function channel(){
        return $this->belongsTo('App\Channel');
    }
    public function replies()
    {
        return $this->hasMany('App\Reply');
    }  
}
