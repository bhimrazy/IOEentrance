@extends('layouts.master')

@section('content')
    @include('admin.includes.errors')  
    
<div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title"> Create a new category</h3>  
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form action="{{route('category.store')}}" method="post">
            @csrf

            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" name="name" class="form-control">
            </div>
          
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit"><span><i class="fas fa-save"></i></span> Store Category</button>
                </div>
            </div>

        </form>
    </div>
   
  </div>
@stop 