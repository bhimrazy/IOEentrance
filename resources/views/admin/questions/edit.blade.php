@extends('layouts.app')

@section('content')
        @include('admin.includes.errors')  
    <div class="card">
    <div class="card-header">Update question:{{ $question->id }}</div>

        <div class="card-body">
        
        <form action="{{route('question.update',$question->id)}}" method="post">
                @csrf              
                <div class="form-group">
                    <label for="title">Question Title</label>
                    <input type="text" name="title" class="form-control" value="{{$question->title}}">
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
                    <input type="text" name="option" class="form-control" value="{{$question->option}}">
                    {{-- <label for="option">Option 2</label>
                    <input type="text" name="option[]" class="form-control">
                    <label for="option">Option 3</label>
                    <input type="text" name="option[]" class="form-control">
                    <label for="option">Option 4</label>
                    <input type="text" name="option[]" class="form-control"> --}}
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                <textarea name="content" id="content" cols="5" rows="5" class="form-control" value="{{$question->content}}"></textarea>
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