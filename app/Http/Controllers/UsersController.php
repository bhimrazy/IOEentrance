<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\Role;
use Session;
class UsersController extends Controller
{   
       /**
    * Constructor.
    *
    * @return void
    */
    
   public function __construct()
   {
       $this->middleware('auth');
        $this->middleware('admin');
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.index')->with('users',User::all()); 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create'); 
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
           'name'=>'required',
           'email'=>'required|string|email|max:255|unique:users'
        ]);
        
        $user= new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password =bcrypt('password');
        $user->save();       
        $profile= new App\Profile;
        $profile->user_id=$user->id;
        $profile->save();       
        Session::flash('success','User created successfully ');
        return redirect()->route('users');
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
        $user = User::find($id);
        $user->profile()->delete();
        $user->delete();
        Session::flash('success','You successfully deleted the user');
        return redirect()->route('users');
    }
    public function changerole($id)
    {   $user = User::find($id);
       // $subscriber =Role::where('name','Subscriber')->get('id');
        //$subAdmin =  Role::where('name','subAdmin')->get('id');
        // dd($subAdmin);
        if($user->role->name=='Subscriber'){
            $user->role_id= 2;
        }
        else{
            $user->role_id= 1;
            }
        $user->save();
        Session::flash('success','You successfully changed the user role.');
        return redirect()->back();
    }
}