@extends('layouts.master')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"> All Posts</h3>  
    </div>
</div>
@if ($posts->count()>0)
@foreach ($posts as $key =>$post)
<div class="box">
    <div class="box-header with-border">
      <h4 class="box-title"><span><strong>{{$key+1}} </strong>.</span> {{$post->title}}</h4>
    </div>
   <div class="box-body">
       <div class="row">
           <div class="col-sm-12 col-md-4">
            <img class="img-responsive" src="{{$post->imgUrl()}}" alt=" {{$post->title}}">

           </div>
           <div class="col-sm-12 col-md-8">
            {!!str_limit($post->content,400)!!}
           </div>
       </div>
    </div>
         
    <!-- /.box-body -->
    <div class="box-footer">
        <div class="row">
            
            <div class="col-md-6"> 
                <a href="{{route('posts.edit',['post'=>$post->id])}}" class="btn btn-primary mr-3"><span><i
                class="fas fa-edit"></i></span> Edit</a>
            </div>
            <div class="col-md-6"> 
                <form action="{{route('posts.destroy',['post'=>$post->id])}}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger" type="submit"><span><i
                    class="fas fa-trash-alt"></i></span> Delete</button>
                </form>
            </div>
        </div>
      
     
       
    </div>
    <!-- /.box-footer-->
  </div>                   
@endforeach
<div class="text-center">
    {{$posts->links()}}
</div>
@else
<div class="box mt-4 p-4">
<h4>No Post Found.</h4> 
</div>
@endif               
@stop
