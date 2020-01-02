@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">  All Tags</div>

    <div class="card-body">
        @if ($tags->count()>0)
            <table class="table table-hover table-bordered">        
                <thead class="thead-light">
                    <th>
                        Tag Name
                    </th>
                    <th>
                        Editing
                    </th>
                    <th>
                        Deleting
                    </th>
                </thead>
                <tbody>               
                        @foreach ($tags as $tag)
                            <tr>
                                <td>
                                    {{$tag->tag}}
                                    
                                </td>   
                                <td>
                                <a href="{{route('tag.edit',$tag->id) }}"><button class="btn btn-primary"><span><i class="fas fa-edit"></i></span> Edit</button></a> 
                                </td>
                                <td>
                                    <a href="{{route('tag.delete',$tag->id)}}"><button class="btn btn-danger"><span><i class="fas fa-trash-alt"></i></span> Delete</button></a>
                                </td>
                            </tr>
                        @endforeach                    
                </tbody>

            </table>
        @else      
        <h3>No Tag found</h3>
        @endif
    </div>
</div>
@stop