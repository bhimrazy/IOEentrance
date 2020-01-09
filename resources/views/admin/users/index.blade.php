@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Users</div>

    <div class="card-body">       
            <table class="table table-hover table-bordered">        
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
                                <img src="{{ asset('uploads/avatar/avatar.png') }}" class="rounded-circle" alt="profile_img" width="60px" height="60px">
                                    
                                </td>
                                <td>
                                    {{$user->name}}<br>
                                    <small> {{$user->email}} </small>
                                    
                                </td>  
                                <td class="text-center">
                                    {{$user->role->name}}
                                    @if($user->role->name=='Subscriber')
                                    <a href="{{route('user.changerole',$user->id)}}" class="btn btn-outline-danger btn-sm text-dark">Make subAdmin</a>
                                    @elseif($user->role->name=='subAdmin')
                                    <a href="{{route('user.changerole',$user->id)}}" class="btn btn-outline-danger btn-sm">Make Subscriber</a>
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
</div>
@stop