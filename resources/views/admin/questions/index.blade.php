@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">  All Questions</div>

    <div class="card-body">       
        <div class="card" >
            @if ($questions->count()>0)
            @foreach ($categories as $category)  
                @php
                   $i=1 
                @endphp        
                @foreach ($questions as $question)
                    @if ($category->id==$question->category_id) 
                    <div class="card-header">{{$category->name}}</div> 
                        <div class="card-body">
                        <h5 class="card-title"><span>{{$i}}
                        @php   
                            $i++
                        @endphp</span> {{$question->title}}</h5>                                    
                        </div>
                        <ul class="list-group list-group-flush m-3">                      
                        <li class="list-group-item ">{{$question->option}}</li>
                        <li class="list-group-item ">{{$question->content}}</li>
                        </ul>
                        <div class="card-body">
                            <a href="{{route('question.edit',$question->id) }}"><button class="btn btn-primary"><span><i class="fas fa-edit"></i></span> Edit</button></a> 
                            <a href="{{route('question.delete',$question->id)}}"><button class="btn btn-danger"><span><i class="fas fa-trash-alt"></i></span> Delete</button></a>                            
                        </div>          
                    @endif                                
                @endforeach                                            
             @endforeach
            @else      
            <h3>No Question found</h3>
         @endif
    </div>
</div>
@stop