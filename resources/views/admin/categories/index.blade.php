@extends('layouts.master')

@section('content')


<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"> All Categories</h3>  
      </div>

    <div class="box-body">
        @if ($categories->count()>0)
            <table class="table table-hover table-bordered">        
                <thead class="thead-light">
                    <th>
                        Category Name
                    </th>
                    <th>
                        Editing
                    </th>
                    <th>
                        Deleting
                    </th>
                </thead>
                <tbody>               
                        @foreach ($categories as $category)
                            <tr>
                                <td>
                                    {{$category->name}}
                                    
                                </td>   
                                <td>
                                <a href="{{route('category.edit',$category->id) }}"><button class="btn btn-primary"><span><i class="fas fa-edit"></i></span> Edit</button></a> 
                                </td>
                                <td>
                                    <a href="{{route('category.delete',$category->id)}}"><button class="btn btn-danger"><span><i class="fas fa-trash-alt"></i></span> Delete</button></a>
                                </td>
                            </tr>
                        @endforeach                    
                </tbody>

            </table>
        @else      
        <h3>No Category found</h3>
        @endif
    </div>
</div>
@stop