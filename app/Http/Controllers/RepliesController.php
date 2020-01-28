<?php

namespace App\Http\Controllers;

use App\Reply;
use App\Like;
use Auth;
use Illuminate\Http\Request;

class RepliesController extends Controller
{
    public function like($id){
        Like::create([
            'reply_id'=>$id,
            'user_id'=> Auth::id()
        ]);
        return redirect()->back()->with('success','You successfully liked the reply');
    }
    public function unlike($id){
        Like::where('reply_id',$id)->where('user_id',Auth::id())->first()->delete();
    return redirect()->back()->with('success','You successfully unliked the reply');
    }
}
