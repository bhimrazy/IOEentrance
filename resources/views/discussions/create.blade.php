@extends('layouts.forum')

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Create a new Discussion</h3>          
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <form action="{{route('discussions.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
              </div>    
            <div class="form-group">
              <label for="channel">Pick a Channel</label>
              <select name="channel_id" id="channel" class="form-control">
                  @foreach ($channels as $channel)
                      <option value="{{$channel->id}}">{{$channel->name}}</option>
                  @endforeach                        
              </select>  
            </div>    
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="content">Ask a question</label>
                 <textarea name="content" id="article-ckeditor" cols="30" rows="5" class="form-control"></textarea>
              </div>
              </div>
            </div>
                        
            <div class="form-group">
                <div class="text-center">
                    <button class="btn btn-success" type="submit"><span><i class="fa fa-edit"></i></span> Create discussion</button>
                </div>
            </div>

        </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>

@stop