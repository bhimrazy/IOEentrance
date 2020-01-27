<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profile;
use App\User;
use Session;
use Intervention\Image\Facades\Image;
class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminindex()
    {
        return view('admin.profile.index');
    }
    public function subsindex()
    {
        return view('subscriber.profile.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function subsstore(Request $request)
    {
        $data = $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',            
            'avatar'=>'required|image|max:1024',
            'college'=>'required',
            'about'=>'required',
            'address'=>'required'

        ]);
           
       $user= auth()->user();
       $user->name=$data['name'];
       $user->email=$data['email'];   
       $imagePath=request('avatar')->storeAs('profiles',$user->name.'-profile.png','public');
       $image = Image::make(public_path("storage/{$imagePath}"))->fit(200,200);
       $image->save();     
      if($user->profile){
        $profile = Profile::find($user->profile->id);
        $profile=$user->profile();        
        $profile->avatar=$imagePath;
        $profile->college=$data['college'];
        $profile->about=$data['about'];
        $profile->address=$data['address'];        
    }
    else{
        $profile= new Profile;
        $profile->user_id=$user->id;
        $profile->avatar=$imagePath;
        $profile->college=$data['college'];
        $profile->about=$data['about'];
        $profile->address=$data['address'];    
        $profile->save();
    }       
       $user->save();      
        Session::flash('success','You successfully updated your profile.');
        return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
