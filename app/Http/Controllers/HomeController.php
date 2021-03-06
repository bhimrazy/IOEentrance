<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Examsurvey;
use App\Question;
use App\Discussion;
class HomeController extends Controller
{
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   

        return view('admin.index')->with('users',User::all())->with('questions',Question::all())
                                    ->with('examsurveys',Examsurvey::all())
                                    ->with('discussions',Discussion::all());
    }
}
