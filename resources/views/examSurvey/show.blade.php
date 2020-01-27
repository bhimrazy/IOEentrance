@extends('layouts.exam')
@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"> RESULT</h3>  
    </div>
    <div class="box-body">       
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