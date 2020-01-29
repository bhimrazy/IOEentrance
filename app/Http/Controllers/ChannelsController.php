<?php

namespace App\Http\Controllers;
use App\Channel;
use Illuminate\Http\Request;

class ChannelsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
         $this->middleware('subadmin')->except(['show']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('channels.index')->with('channels',Channel::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('channels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
           'name'=>'required|unique:channels'
       ]);

       Channel::create([
           'name' => $request->name,
           'slug' => str_slug($request->name)
       ]);
       
        return redirect()->route('channels.index')->with('success','Channel created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {    
        $channel=Channel::where('slug',$slug)->first();
        $discussions= $channel->discussions()->orderBy('created_at','desc')->paginate(3);
      
        return view('discussions.index')->with('discussions',$discussions);
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Channel $channel)
    {
        return view('channels.edit')->with('channel',$channel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Channel $channel)
    {    $this->validate($request,[
        'name'=>'required|unique:channels'
         ]);     
       $channel->name=$request->name;
       $channel->save();
       return redirect()->route('channels.index')->with('success','Channel updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Channel $channel)
    {   $channel->delete();      
        return redirect()->back()->with('success','Channel deleted successfully');
    }
}
