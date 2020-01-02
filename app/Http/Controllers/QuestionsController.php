<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Category;
use App\Tag;
use Session;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.questions.index')->with('categories',Category::all())->with('questions',Question::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.questions.create')->with('categories',Category::all())->with('tags',Tag::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    // dd($request);
        $this->validate($request,[
            'title'=>'required',
            'options.*.option'=>'required',
            'content'=>'required',
            'category_id'=>'required',
            'tags'=>'required'

        ]);
        //dd($request);
        //Question::create($request);
        $question = new Question;
        $question->title = $request->title;       
        $question->content = $request->content;
        $question->category_id = $request->category_id;
        $question->save();        
        $question->options()->createMany($request->options);
        $question->tags()->attach($request->tags);
        Session::flash('success','You successfully created a question');
        return redirect()->route('questions');
       
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
        $question = Question::find($id);
        return view('admin.questions.edit')->with('question',$question)->with('categories',Category::all())->with('tags',Tag::all());
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
        $question = Question::find($id);
        $question->title = $request->title;       
        $question->content = $request->content;
        $question->category_id = $request->category_id;
        $question->save();
        $question->options()->sync($request->options);
        $question->tags()->sync($request->tags);
        Session::flash('success','You successfully updated the question');
        return redirect()->route('questions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        $question = Question::find($id);
        $question->delete();
        Session::flash('success','You successfully deleted the question');
        return redirect()->route('questions');
    }
}
