@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">RESULT</div>

    <div class="card-body">       
            <table class="table table-hover table-bordered">        
                <thead class="thead-light">
                    <th>
                        S.N.
                    </th>
                    <th>
                        Options
                    </th>
                    <th>
                        Points
                    </th>                   
                </thead>
                <tbody> 
               <tr>
                <td>1</td>  
                <td>Right Answer</td>
                <td>{{$rightAnswer}}</td>
               </tr>
               <tr>
                <td>2</td>  
                <td>Wrong Answer</td>
                <td>{{$wrongAnswer}}</td>
               </tr>
                                         
                </tbody>

            </table>       
    </div>
</div>
@stop