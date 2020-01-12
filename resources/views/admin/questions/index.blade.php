@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header"> All Questions</div>
</div>

@if ($questions->count()>0 && $categories->count()>0 )
    @foreach ($categories as $category)
        @if ($category->questions->count()>0)
                <div class="card mt-4">
                    <div class="card-header">{{$category->name}}</div> 
                </div>      
                    @foreach ($category->questions as $key =>$question)
                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title"><span><strong>{{$key+1}} </strong>.</span> {{$question->title}}</h5>
                            <div class="container pt-2">    
                                <h6>Options</h6>
                                @foreach ($question->options as $k => $option)
                                    <ul class="list-group list-group-flush m-2">
                                        <li class="list-group-item border rounded">{{$k+1}} .{{$option->option}}</li>
                                    </ul>       
                                @endforeach 
                                <h6>Tags</h6>
                                @if ($question->tags->count()>0)
                                    @foreach ($question->tags as $tag)
                                        <div class="btn btn-secondary btn-sm"> {{$tag->tag}}&nbsp;   </div>             
                                    @endforeach   
                                @else
                                <h6>No Tag found.</h6>
                                @endif               
                            </div>                     
                        </div>
                        <div class="card-footer border-bottom">
                            <a href="{{route('question.edit',$question->id) }}"><button class="btn btn-primary mr-3"><span><i
                                            class="fas fa-edit"></i></span> Edit</button></a>
                            <a href="{{route('question.delete',$question->id)}}"><button class="btn btn-danger"><span><i
                                            class="fas fa-trash-alt"></i></span> Delete</button></a>
                        </div>
                    </div>    
                    @endforeach
               
        @endif
    @endforeach                  
@else
<div class="card mt-4 p-4">
<h4>No Questions Found.</h4> 
</div>
@endif               
@stop
