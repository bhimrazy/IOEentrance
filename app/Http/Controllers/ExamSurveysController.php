<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Auth;
use App\Examsurvey;
class ExamSurveysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $user= auth()->user();
        return view('examSurvey.index')->with('examsurveys',$user->examsurveys);
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
      $rightAnswer_1mark =0;
      $wrongAnswer_1mark=0; 
      $rightAnswer_2mark =0;
      $wrongAnswer_2mark=0; 
      $notAnswered_1mark =0;
      $notAnswered_2mark=0;
        foreach ($allresponses as $key => $response) {   
            $question = \App\Question::findOrFail($response['question_id']);
            if(count($response)<2){
                if($question->tags()->find('1 mark')['tag'] == "1 mark"){
                 
                    $notAnswered_1mark++;
                }
                else{
                    $notAnswered_2mark++;
                }
                continue;
            }
            //$question = \App\Question::findOrFail($response['question_id']);
            $ans =$question->correctanswer['correctanswer'];
                if( $ans == $response['option_id']){
                    if($question->tags()->find('1 mark')['tag'] == "1 mark"){
                        $rightAnswer_1mark++;
                    }
                    else{
                        $rightAnswer_2mark++;
                    }
                   
                }
                elseif( $ans !== $response['option_id']){
                    if($question->tags()->find('1 mark')['tag'] == "1 mark"){
                        $wrongAnswer_1mark++;
                    }
                    else{
                        $wrongAnswer_2mark++;
                    }
                }       
           
        }
        $examsurvey = new Examsurvey;
        $examsurvey->user_id =Auth::id();
        $examsurvey->rightanswer1mark=$rightAnswer_1mark;
        $examsurvey->rightanswer2mark=$rightAnswer_2mark;
        $examsurvey->wronganswer1mark=$wrongAnswer_1mark;
        $examsurvey->wronganswer2mark=$wrongAnswer_2mark;
        $examsurvey->notanswered1mark=$notAnswered_1mark;
        $examsurvey->notanswered2mark=$notAnswered_2mark;
        $examsurvey->total= (($rightAnswer_1mark*1+$rightAnswer_2mark*2)-($wrongAnswer_1mark*1+$wrongAnswer_2mark*2)*0.1);
        $examsurvey->save();
        return view('examSurvey.show')->with('rightAnswer_1mark',$rightAnswer_1mark)->with('wrongAnswer_1mark',$wrongAnswer_1mark)
                                      ->with('rightAnswer_2mark',$rightAnswer_2mark)->with('wrongAnswer_2mark',$wrongAnswer_2mark)
                                      ->with('questions',\App\Question::all())->with('responses',$allresponses)
                                      ->with('notAnswered_1mark',$notAnswered_1mark)->with('notAnswered_2mark',$notAnswered_2mark);
            
            
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $examsurvey= Examsurvey::findOrFail($id);
        return view('examSurvey.surveyshow')->with('examsurvey',$examsurvey);
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
       Examsurvey::findOrFail($id)->delete();
       return redirect()->back()->with('success','You successfully deleted the survey');
    }
}
