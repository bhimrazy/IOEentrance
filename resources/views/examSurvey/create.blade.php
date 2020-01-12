@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header"> All Questions</div>
</div>
<form action="{{route('examsurvey.store')}}" method="post">
    @csrf
    @if ($questions->count()>0) 
        @foreach ($questions as $key =>$question)
            <div class="card mt-2">
                <div class="card-header"><span><strong>{{$key+1}} </strong>.</span>{{$question->title}}</div>

                <div class="card-body pt-2">
                    <h6>Options</h6>
                    <ul class="list-group">
                        @foreach ($question->options as $k => $option)
                        <li class="list-group-item m-1 rounded">
                        <label for="option{{$option->id}}">{{$k+1}}.  <input type="radio" name="responses[{{$key}}][option_id]" class="mr-2" 
                            id="option{{$option->id}}" value="{{$option->id}}">{{$option->option}} 
                        <input type="hidden" name="responses[{{$key}}][question_id]" value="{{$question->id}}">
                        </label>
                        </li> 
                        @endforeach       
                    </ul>
                </div>
            </div>    
        @endforeach        
    @endif 
    <div class="text-center p-2">
        <button type="submit" class="btn btn-dark">Submit Your Answers</button>
    </div>
</form> 
@stop
