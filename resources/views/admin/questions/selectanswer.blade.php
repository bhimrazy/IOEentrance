@extends('layouts.master')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Select Answer for Question</h3>  
    </div>
</div>

<form action="{{route('question.answerstore',$question->id)}}" method="post">
    @csrf
    <div class="box mt-2">
        <div class="box-header with-border">
            <h3 class="box-title">{!!$question->title!!}</h3>  
        </div>
        <div class="box-body pt-2">
            <h6>Tags</h6>
                @if ($question->tags->count()>0)
                    @foreach ($question->tags as $tag)
                        <div class="btn btn-secondary btn-sm"> {{$tag->tag}}&nbsp;   </div>             
                    @endforeach   
                @else
                <h6>No Tag found.</h6>
                @endif    
            <h6 class="mt-2">Options</h6>
            <ul class="list-group">
                @foreach ($question->options as $k=> $option)
                <li class="list-group-item m-1 rounded">
                <label for="option{{$option->id}}">{{$k+1}}. <input type="radio" name="response[option_id]" class="mr-2" 
                    id="option{{$option->id}}" value="{{$option->id}}">{{$option->option}} 
                <input type="hidden" name="response[question_id]" value="{{$question->id}}">
                </label>
                </li> 
                @endforeach       
            </ul>
        </div>
    </div>   
    <div class="text-center p-2">
        <button type="submit" class="btn bg-navy">Submit Your Correct Answer for this Question</button>
    </div>
    {{-- <div class="form-group p-2">
        <div class="text-center">
            <a href="{{route('question.answerstore',$question->id)}}"><button class="btn btn-success" type="submit"><span><i class="fas fa-save"></i></span>Submit Your Correct Answer for this Question</button></a>
        </div>
    </div> --}}
</form>          
@stop
