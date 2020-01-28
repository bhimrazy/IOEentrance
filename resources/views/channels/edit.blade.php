@extends('layouts.channel')

@section('content')
    @include('admin.includes.errors')  
    
<div class="box box-default">
    <div class="box-header with-border">
      <h3 class="box-title"> Edit : {{$channel->name}}</h3>  
    </div> 
    <!-- /.box-header -->
    <div class="box-body">
        <form action="{{route('channels.update',['channel'=>$channel->id])}}" method="post">
            @csrf
           @method('put')
            <div class="form-group">
                <label for="name">Channel Name</label>
            <input type="text" name="name" class="form-control" value="{{$channel->name}}">
            </div>
          
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit"><span><i class="fas fa-save"></i></span> Update Channel</button>
                </div>
            </div>

        </form>
    </div>
   
  </div>
@stop 