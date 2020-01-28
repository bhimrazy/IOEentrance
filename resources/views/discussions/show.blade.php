@extends('layouts.forum')

@section('content')
<div class="row">
    <div class="col-xs-12">
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
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <h3 class="text-center">{{ucfirst($discussion->title)}}</h3>
                  <h4 class="text-center">{!!$discussion->content,150!!}</h4>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                  <p>{{$discussion->replies->count()}} Replies</p>
                </div>
              </div>
              <!-- /.box -->
            </div>
        </div> 
        @foreach ($discussion->replies as $reply)
          <div class="box box-solid box-default">
            <div class="box-header">
              @if ('admin')
              <h3 class="box-title">Replied by&nbsp;&nbsp;&nbsp;{{$discussion->user->role->name}}</h3>&nbsp;&nbsp;{{$reply->created_at->diffForHumans()}}
              @else
              <h3 class="box-title">Replied by&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$reply->user->name}} </h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{$reply->user->imgUrl()}}" class="img-circle" width="50px" height="50px" alt="User Image">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$reply->created_at->diffForHumans()}}
              @endif              
            </div><!-- /.box-header -->
            <div class="box-body">
               <!-- Conversations are loaded here -->
              {{$reply->content}}
            </div><!-- /.box-body -->
            <div class="box-footer">
              @if ($reply->is_liked_by_auth_user())
                <form action="{{route('reply.unlike',['id'=>$reply->id])}}" method="post">
                  @csrf
                  <span class="badge">{{$reply->likes->count()}}</span>&nbsp;<button type="submit" class="btn btn-danger btn-xs"><i class="fas fa-thumbs-down"></i></button>
                </form>
              @else
                <form action="{{route('reply.like',['id'=>$reply->id])}}" method="post">
                  @csrf
                  <span class="badge">{{$reply->likes->count()}}</span>&nbsp;<button type="submit" class="btn btn-primary btn-xs"><i class="fas fa-thumbs-up"></i></button>
                </form>
              @endif
            </div>
          </div>
        @endforeach  
        <div class="box box-primary direct-chat direct-chat-primary">
          <div class="box-header with-border">
              <h3 class="box-title">Write a reply</h3>
             </div><!-- /.box-header -->
          <div class="box-body">             
            <form action="{{route('discussions.reply',['id'=>$discussion->id])}}" method="post">
              @csrf
                <div class="form-group text-center">
                    <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-primary btn-flat">Leave a Reply</button>
                    </span>
                </div>
            </form>
          </div><!-- /.box-body -->
        </div>  
    </div>
  </div>

@stop