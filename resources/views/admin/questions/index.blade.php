@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header"> All Questions</div>

    <div class="card-body">       
        @if ($questions->count()>0)
            <div class="card">
                @foreach ($categories as $category)
                @if ($category->questions->count()>0)
                <div class="card-header">{{$category->name}}</div>
                @php
                $i=1
                @endphp
                @foreach ($category->questions as $question)
                {{-- @if ($category->id==$question->category_id)  --}}

                <div class="card-body">
                    <h5 class="card-title"><span>{{$i}}
                            @php
                            $i++
                            @endphp</span> {{$question->title}}</h5>
                </div>
                <ul class="list-group list-group-flush m-2">
                    <h5>Options</h5>
                    @foreach ($question->options as $option)
                    <li class="list-group-item ">{{$option->option}}</li>
                    @endforeach
                    <li class="list-group-item ">{{$question->content}}</li>
                    <div class="container pt-2">
                        <h5>Tags</h5>
                    @if ($question->tags->count()>0)
                        @foreach ($question->tags as $tag)
                       <div class="btn btn-secondary btn-sm"> {{$tag->tag}}&nbsp;   </div>             
                        @endforeach   
                    @else
                     <h6>No Tag found.</h6>
                    @endif               
                    </div> 
                </ul>
               
                <div class="card-body border-bottom">
                    <a href="{{route('question.edit',$question->id) }}"><button class="btn btn-primary"><span><i
                                    class="fas fa-edit"></i></span> Edit</button></a>
                    <a href="{{route('question.delete',$question->id)}}"><button class="btn btn-danger"><span><i
                                    class="fas fa-trash-alt"></i></span> Delete</button></a>
                </div>
                {{-- @endif                                 --}}
                @endforeach
                @else
                <h3 class="p-2"> No Question found for {{$category->name}}</h3>
                @endif
                @endforeach        
            </div>
        @else
         <h3>No Questions Found.</h3> 
        @endif
    </div>
    @stop
