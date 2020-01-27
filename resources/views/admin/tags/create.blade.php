@extends('layouts.master')

@section('content')
    @include('admin.includes.errors')  
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title"> Create a new Tag</h3>  
        </div>
        <div class="box-body">
        
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