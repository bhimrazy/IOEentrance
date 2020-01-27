<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
class ExamSurveysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('examSurvey.index')->with('questions',Question::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('examSurvey.create')->with('questions',Question::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    # code...
      $allresponses = $request->responses ;  
    //   dd($allresponses);
      $rightAnswer =0;
    //   $rightQuestions= new Array();
      $wrongAnswer=0; 
    //   $wrongQuestions=new Array();
    //    dd($request->all());
    foreach ($allresponses as $key => $response) {   
        if(count($response)<2){continue;}
        $question = \App\Question::findOrFail($response['question_id']);
        $ans =$question->correctanswer->correctanswer;
        if( $ans == $response['option_id']){
            // $rightQuestions[$rightAnswer]= $response['question_id'];  
            $rightAnswer++;
        }
        if( $ans !== $response['option_id']){
            // $wrongQuestions[$wrongAnswer]= $response['question_id'];
            $wrongAnswer++; 
        }
        //    foreach ($rightQuestions as $key =>$rightQuestion) { echo  $rightQuestion; }
        //    foreach ($wrongQuestions as $key =>$wrongQuestion) { echo  $wrongQuestion;}
        //echo  $rightAnswer;
        //echo "\n\t\t";
        //echo  $wrongAnswer;             
    }
        return view('examSurvey.show')->with('rightAnswer',$rightAnswer)->with('wrongAnswer',$wrongAnswer);
            
            
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
