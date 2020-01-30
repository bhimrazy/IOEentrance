@extends('layouts.exam')
@section('content')
<div class="container textcenter">
  <a href="{{route('examsurvey.create')}}" class="btn btn-large bg-navy"><i class="fas fa-laptop-code"></i> <span>Start exam</span></a></li>
      
</div>
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Exam Records</h3>

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
                   Exam
                </th>
                <th>
                   Total Obtained Marks
                </th>
                <th>
                 Created At
                </th>
                <th>
                View detail
                </th>
                <th>
                  Delete
                </th>
            </thead>
            <tbody> 
                @if ($examsurveys->count()>0)              
                    @foreach ($examsurveys as $key =>$survey)
                        <tr>
                            <td>
                                {{$key+1}} 
                                
                            </td>  
                            
                            <td>
                               
                               Survey  {{$key+1}} 
                                
                            </td>  
                            <td>
                              {{$survey->total}} 
                            </td>  
                            <td>
                            {{$survey->created_at->diffForHumans()}} 
                            </td> 
                            <td>                          
                                <a href="{{route('examsurvey.show',$survey->id)}}"><button class="btn bg-purple"><span><i class="fas fa-trash-alt"></i></span> View</button></a>
                            </td>     
                            <td>                           
                                <a href="{{route('examsurvey.delete',$survey->id)}}"><button class="btn btn-danger"><span><i class="fas fa-trash-alt"></i></span> Delete</button></a>
                            </td>                                
                        </tr>
                    @endforeach 
                    @else      
                     <tr><th><h3>No survey  found</h3></th></tr>
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
