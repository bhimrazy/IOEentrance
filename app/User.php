<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo('App\Role');
    }
    public function profile(){
        return $this->hasOne('App\Profile');
    }  
    public function discussions()
    {
        return $this->hasMany('App\Disscussion');
    }  
    public function replies()
    {
        return $this->hasMany('App\Reply');
    }  
    public function likes()
    {
        return $this->hasMany('App\Like');
    }  
    public function imgUrl(){
        if($this->profile){
            $url= '/storage/' . $this->profile->avatar;
        }
        else{
        $url='/storage/profiles/dummy-profile.png';
        }
        return asset($url);
    }
    public function userDetails($data){
        if($this->profile && $this->profile->$data){
           if($this->profile->$data){
            return $this->profile->$data;
           }else{
            return 'Your '.ucfirst($data).' here.';}       
        }
        else{
            return 'Your '.ucfirst($data).' here.';
        }       
    }
}
