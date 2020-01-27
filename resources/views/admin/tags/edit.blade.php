@extends('layouts.master')

@section('content')
        @include('admin.includes.errors')  
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Update Tag:{{ $tag->name }}</h3>  
        </div>
       <div class="box-body">
        
        <form action="{{route('tag.update',$tag->id)}}" method="post">
                @csrf              
                <div class="form-group">
                    <label for="name">Tag Name</label>
                <input type="text" name="tag" class="form-control" value="{{$tag->tag}}">
                </div>
              
                <div class="form-group">
                    <div class="text-center">
                        <a href="{{route('tag.update',$tag->id)}}"><button class="btn btn-success" type="submit"><span><i class="fas fa-save"></i></span> Update Tag</button></a>
                    </div>
                </div>

            </form>
        
        </div>
    </div>
@stop 