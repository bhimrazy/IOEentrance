<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use App\Reply;
use Auth;
class DiscussionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $discussions=Discussion::orderBy('created_at','desc')->paginate(3);
        return view('discussions.index')->with('discussions',$discussions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('discussions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$this->validate($request,[
            'title'=>'required',
            'channel_id'=>'required',
            'content'=>'required'
        ]);
        
        $discussion=Discussion::create([
            'user_id' =>  Auth::id(),
            'channel_id' => $data['channel_id'],
            'title' => $data['title'],
            'content' => $data['content'],
            'slug' => str_slug($data['title'])
        ]);
       
        return redirect()->route('discussions.show',['discussion'=>$discussion->slug])->with('success','A discussion created successsfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
      
        return view('discussions.show')->with('discussion',Discussion::where('slug',$slug)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function reply(Request $request, Discussion $discussion)
    {    $data=$this->validate($request,[
        'content'=>'required'
        ]);
        $reply=new Reply;
        $reply->user_id = Auth::id();
        $reply->discussion_id =$discussion->id;
        $reply->content=$data['content'];
        $reply->save();
        return redirect()->back()->with('success','You successfully submitted your reply');
    }
}
