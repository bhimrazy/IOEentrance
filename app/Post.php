<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded=[];
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function imgUrl(){
        if($this->image){
            $url= '/storage/' . $this->image;
        }
       return asset($url);
    }
}
