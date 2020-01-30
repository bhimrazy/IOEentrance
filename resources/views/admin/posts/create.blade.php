@extends('layouts.master')
@section('content')            
<div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title">Create a new Post</h3>  
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="inputTitle" class="col-sm-2 control-label">Post Title</label>
                <div class="col-sm-10">
                  <input type="title" class="form-control" id="inputTitle" name="title" placeholder="Title" value="{{old('title')}}">
                @error('title')
                 <small class="text-danger">{{$message}}</small>
                @enderror
            </div>        
            <div class="form-group">
                <label for="fileToUpload" class="col-sm-2 control-label">Select Image</label>

                <div class="col-sm-10">
                  <input type="file" name="image" id="fileToUpload" value="{{old('image')}}">
                  <small>Max size 2MB.</small>
                  @error('image')
                  <small class="text-danger">{{$message}}</small>
                   @enderror
                </div>                  
            </div> 
            <div class="form-group">
                <label for="content">Post Content</label>                    
                <textarea name="content" id="article-ckeditor" cols="30" rows="5" class="form-control">{{old('content')}}</textarea>
                @error('content')
                <br>
                <small class="text-danger ml-2">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit"><span><i class="fas fa-save"></i></span> Store Post</button>
                </div>
            </div>

        </form>
    </div>
   
  </div>

@stop 