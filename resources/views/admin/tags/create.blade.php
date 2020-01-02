@extends('layouts.app')

@section('content')
    @include('admin.includes.errors')  
    <div class="card">
        <div class="card-header">  Create a new Tag</div>

        <div class="card-body">
        
        <form action="{{route('tag.store')}}" method="post">
                @csrf

                <div class="form-group">
                    <label for="tag">Tag Name</label>
                    <input type="text" name="tag" class="form-control">
                </div>
              
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit"><span><i class="fas fa-save"></i></span> Store Tag</button>
                    </div>
                </div>

            </form>
        
        </div>
    </div>
@stop 