@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header"> All Questions</div>
</div>
<form action="" method="post">
    @if ($questions->count()>0) 
        @foreach ($questions as $key =>$question)
            <div class="card mt-2">
                <div class="card-header"> <span>{{$key+1}}</span> {{$question->title}}</div>

                <div class="card-body pt-2">
                    <h6>Options</h6>
                    <ul class="list-group">
                        @foreach ($question->options as $option)
                        <li class="list-group-item m-1 rounded">
                        <label for="option{{$option->id}}"><input type="radio" class="mr-2" id="option{{$option->id}}">{{$option->option}} </label>
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
