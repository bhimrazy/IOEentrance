@extends('layouts.forum')

@section('content')
<div class="row">
    <div class="col-xs-12 align-middle">
      @foreach ($discussions as $discussion)
              <div class="row">
                <div class="col-md-12">
                  <div class="box box-default">
                    <div class="box-header with-border">
                      <img src="{{$discussion->user->imgUrl()}}" class="img-circle" width="50px" height="50px" alt="User Image">
                      @if ('admin'||'subAdmin')
                      <h2 class="box-title"> &nbsp;&nbsp;&nbsp;&nbsp;{{$discussion->user->role->name}},&nbsp;&nbsp;&nbsp;&nbsp;<b>{{$discussion->created_at->diffForHumans()}}</b> </h2>
                      @else
                      <h2 class="box-title"> &nbsp;&nbsp;&nbsp;&nbsp;{{$discussion->user->name}},&nbsp;&nbsp;&nbsp;&nbsp;<b>{{$discussion->created_at->diffForHumans()}}</b> </h2>
                      @endif    
                      <a href="{{route('discussions.show',['discussion'=>$discussion->slug])}}" class="btn btn-default pull-right">View</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <h3 class="text-center">{{ucfirst($discussion->title)}}</h3>
                      <h4 class="text-center">{!!str_limit($discussion->content,150)!!}</h4>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                    <p>{{$discussion->replies->count()}} Replies <a href="{{route('channels.show',['slug'=>$discussion->channel->slug])}}" class="btn btn-default btn-xs pull-right">{{$discussion->channel->name}}</a></p>
                    </div>
                  </div>
                  <!-- /.box -->
                </div>
              </div><hr>
           @endforeach  
           <div class="text-center">
             {{$discussions->links()}}
    </div>
  </div>

@stop