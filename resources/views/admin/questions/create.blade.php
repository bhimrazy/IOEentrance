@extends('layouts.master')
@section('content')            
<div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Create a new question</h3>  
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form action="{{route('question.store')}}" method="post">
            @csrf

            <div class="form-group">
                <label for="title">Question Title</label>                    
                <textarea name="title" id="article-ckeditor" cols="30" rows="5" class="form-control">{{old('title')}}</textarea>
                <small id="titleHelp" class="ml-2">Enter your Question !.</small>
                @error('title')
                <br>
                <small class="text-danger ml-2">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="checkbox">Select Tags</label>
               <div class="checkbox">
                    @foreach ($tags as $tag)
                    <span class="btn"><label><input type="checkbox" name="tags[]" value="{{$tag->id}}" class="btn">  {{$tag->tag}}</label></span>
                    @endforeach
                    @error('tags')
                    <br>
                    <small class="text-danger ml-2">{{$message}}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="category">Select a Category</label>
                <select name="category_id" id="category" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach                        
                </select>  
            </div>               
            <div class="form-group">
                <label for="option">Option 1</label>
                <input type="text" name="options[0][option]" class="form-control" value="{{old('options.0.option')}}">
                @error('options.0.option')
                <small class="text-danger ml-2">{{$message}}</small><br>
                @enderror
                <label for="option">Option 2</label>
                <input type="text" name="options[1][option]" class="form-control" value="{{old('options.1.option')}}">
                @error('options.1.option')
                <small class="text-danger ml-2">{{$message}}</small><br>
                @enderror
                <label for="option">Option 3</label>
                <input type="text" name="options[2][option]" class="form-control" value="{{old('options.2.option')}}">
                @error('options.2.option')
                <small class="text-danger ml-2">{{$message}}</small><br>
                @enderror
                <label for="option">Option 4</label>
                <input type="text" name="options[3][option]" class="form-control" value="{{old('options.3.option')}}">
                @error('options.3.option')
                <small class="text-danger ml-2">{{$message}}</small><br>
                @enderror
            </div>                
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit"><span><i class="fas fa-save"></i></span> Store Question</button>
                </div>
            </div>

        </form>
    </div>
   
  </div>

@stop 