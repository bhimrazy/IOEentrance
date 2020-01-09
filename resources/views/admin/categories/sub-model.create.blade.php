@extends('layouts.app')

@section('content')
    @include('admin.includes.errors')  
    <div class="card">
        <div class="card-header">  Create a new Sub-model category</div>

        <div class="card-body">
        
        <form action="{{route('category.sub-model.store')}}" method="post">
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