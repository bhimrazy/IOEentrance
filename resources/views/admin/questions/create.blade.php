@extends('layouts.app')

@section('content')
    @include('admin.includes.errors')  
            
    <div class="card">
        <div class="card-header">  Create a new question</div>

        <div class="card-body">
        
        <form action="{{route('question.store')}}" method="post">
                @csrf

                <div class="form-group">
                    <label for="title">Question Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="option">Option 1</label>
                    <input type="text" name="option" class="form-control">
                    {{-- <label for="option">Option 2</label>
                    <input type="text" name="option[]" class="form-control">
                    <label for="option">Option 3</label>
                    <input type="text" name="option[]" class="form-control">
                    <label for="option">Option 4</label>
                    <input type="text" name="option[]" class="form-control"> --}}
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                   <textarea name="content" id="content" cols="5" rows="5" class="form-control"></textarea>
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