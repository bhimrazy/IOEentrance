@extends('layouts.app')

@section('content')
        @include('admin.includes.errors')  
    <div class="card">
    <div class="card-header">Update category:{{ $category->name }}</div>

        <div class="card-body">
        
        <form action="{{route('category.update',$category->id)}}" method="post">
                @csrf              
                <div class="form-group">
                    <label for="name">Category Name</label>
                <input type="text" name="name" class="form-control" value="{{$category->name}}">
                </div>
              
                <div class="form-group">
                    <div class="text-center">
                        <a href="{{route('category.update',$category->id)}}"><button class="btn btn-success" type="submit"><span><i class="fas fa-save"></i></span> Update Category</button></a>
                    </div>
                </div>

            </form>
        
        </div>
    </div>
@stop 