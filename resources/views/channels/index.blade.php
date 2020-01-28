@extends('layouts.channel')

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">All Channels Table</h3>

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
                    Name
                </th>
               <th>
                    Edit
                </th>
                <th>
                    Delete
                </th>
            </thead>
            <tbody> 
                @foreach ($channels as $key =>$channel)
                    <tr><td>
                            {{$key+1}}
                         </td>
                        <td>
                            {{$channel->name}}
                        </td>
                        <td>
                        <a href="{{route('channels.edit',['channel'=>$channel->id])}}" class="btn btn-danger"> EDIT</a>
                        </td>
                        <td>
                            <form action="{{route('channels.destroy',['channel'=>$channel->id])}}" method="post">
                                @csrf
                                @method('delete')
                            <button class="btn btn-danger" type="submit"> Delete</button>
                            </form>                       
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>

@stop