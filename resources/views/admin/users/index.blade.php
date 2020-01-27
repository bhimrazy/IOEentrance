@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">All Users Table</h3>

          <div class="box-tools">
            <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
              <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

              <div class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <thead class="thead-light">
                <th>
                    S.N.
                </th>
                <th>
                    Image
                </th>
                <th>
                    Name
                </th>
                <th>
                    Permissions
                </th>
                <th>
                    Created At
                </th>
                <th>
                    Delete
                </th>
            </thead>
            <tbody> 
                @if ($users->count()>0)              
                    @foreach ($users as $key =>$user)
                        <tr>
                            <td>
                                {{$key+1}} 
                                
                            </td>  
                            <td>
                            <img src="{{$user->imgUrl()}}" class="img-circle" alt="profile_img" width="60px" height="60px">
                                
                            </td>
                            <td>
                                {{$user->name}}<br>
                                <small> {{$user->email}} </small>
                                
                            </td>  
                            <td >
                                {{$user->role->name}} <br>
                                @if($user->role->name=='Subscriber')
                                <a href="{{route('user.changerole',$user->id)}}" class="btn btn-danger btn-sm text-dark">Make subAdmin</a>
                                @elseif($user->role->name=='subAdmin')
                                <a href="{{route('user.changerole',$user->id)}}" class="btn btn-info btn-sm">Make Subscriber</a>
                                @endif
                            </td>  
                            <td>
                            {{$user->created_at->diffForHumans()}} 
                            </td>     
                            <td>
                           
                                <a href="{{route('user.delete',$user->id)}}"><button class="btn btn-danger"><span><i class="fas fa-trash-alt"></i></span> Delete</button></a>
                            </td>                                
                        </tr>
                    @endforeach 
                    @else      
                     <tr><th><h3>No user found</h3></th></tr>
                    @endif                       
            </tbody>
        </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>

@stop