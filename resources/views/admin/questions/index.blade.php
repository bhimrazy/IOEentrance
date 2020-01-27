@extends('layouts.master')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"> All Questions</h3>  
    </div>
</div>
@if ($questions->count()>0 && $categories->count()>0 )
    @foreach ($categories as $category)
        @if ($category->questions->count()>0)
                <div class="box bg-orange mt-4">
                    <div class="box-header with-border">
                        <h1 class="box-title">{{$category->name}}</h1>  
                    </div> 
                </div>      
                    @foreach ($category->questions as $key =>$question)
                    <div class="box">
                        <div class="box-header with-border">
                          <h4 class="box-title"><span><strong>{{$key+1}} </strong>.</span> {{$question->title}}</h4>
                        </div>
                        <div class="box-body with-border">
                            <h6>Options</h6>
                            <ul class="list-unstyled list-group">
                                @foreach ($question->options as $k => $option)                            
                                 <li class="list-group-item m-1 rounded">{{$k+1}} .{{$option->option}}  </li>                         
                                @endforeach 
                            </ul>                          
                         </div>
                        <div class="box-body">
                            <h6>Tags</h6>
                            @if ($question->tags->count()>0)
                            @foreach ($question->tags as $tag)
                                <div class="btn bg-purple btn-sm"> {{$tag->tag}}&nbsp;   </div>             
                            @endforeach   
                            @else
                            <h6>No Tag found.</h6>
                        @endif   
                        </div>
                             
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <a href="{{route('question.edit',$question->id) }}"><button class="btn btn-primary mr-3"><span><i
                                class="fas fa-edit"></i></span> Edit</button></a>
                            <a href="{{route('question.delete',$question->id)}}"><button class="btn btn-danger"><span><i
                                class="fas fa-trash-alt"></i></span> Delete</button></a>
            
                        </div>
                        <!-- /.box-footer-->
                      </div>                   
                    @endforeach
               
        @endif
    @endforeach                  
@else
<div class="box mt-4 p-4">
<h4>No Questions Found.</h4> 
</div>
@endif               
@stop
