@extends('layouts.master')

@section('content')
      <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Create a new User</h3>  
        </div>

        <div class="box-body">
        
        <form action="{{route('user.store')}}" method="post">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}">
                    @error('name')
                    <br>
                    <small class="text-danger ml-2">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" value="{{old('email')}}">
                    @error('email')
                    <br>
                    <small class="text-danger ml-2">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit"><span><i class="fas fa-save"></i></span> Add User</button>
                    </div>
                </div>

            </form>
        
        </div>
    </div>
@stop 