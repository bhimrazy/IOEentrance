@extends('layouts.master')

@section('content')
        @include('admin.includes.errors')  
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"> Update question:{{ $question->id }}</h3>  
        </div>
           <div class="box-body">
        
        <form action="{{route('question.update',$question->id)}}" method="post">
                @csrf              
                <div class="form-group">
                    <label for="title">Question Title</label>
                    <textarea name="title" id="article-ckeditor" cols="30" rows="5" class="form-control">{{$question->title}}</textarea>
                </div>
                <div class="form-group">
                    <label for="category">Select a Category</label>                 
                    <select name="category_id" id="category" class="form-control">
                        @foreach ($categories as $category)
                    <option value="{{$category->id}}" {{$category->id == $question->category->id ? 'selected' :''}}>{{$category->name}}</option>
                        @endforeach
                      
                    </select>
                </div>
                <div class="form-group">
                    <label for="checkbox">Select Tags</label>    
                   @foreach ($tags as $tag)
                   <div class="checkbox">
                         <label><input type="checkbox" name="tags[]" value="{{$tag->id}}"                            
                            @foreach ($question->tags as $t)
                                @if ($tag->id==$t->id)
                                    checked
                                @endif
                            @endforeach                            
                            >{{$tag->tag}}</label>
                    </div>
                   @endforeach
                </div>
                <div class="form-group">
                    <label for="option">Options</label>
                    @foreach ($question->options as $k=>$option)                    
                    <input id="{{$option->id}}" type="text" name="options[]" class="form-control m-2" value="{{$option->option}}">  
                    @endforeach                   
                    
                </div>                             
                <div class="form-group">
                    <div class="text-center">
                        <a href="{{route('question.update',$question->id)}}"><button class="btn btn-success" type="submit"><span><i class="fas fa-save"></i></span> Update Question</button></a>
                    </div>
                </div>

            </form>
        
        </div>
    </div>
@stop 