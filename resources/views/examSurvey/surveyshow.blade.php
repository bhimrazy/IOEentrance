@extends('layouts.exam')
@section('content')
<div class="box">
    <div class="box-header with-border">
    <h3 class="box-title">This is the detai view of survey with ID:{{$examsurvey->id}}</h3>  
    </div>
    <div class="box-body">       
            <table class="table table-hover table-bordered">        
                <thead class="thead-light bg-navy">
                    <th>S.N.</th>
                    <th>Entities</th>
                    <th>Question Type</th>
                    <th>Total Question</th> 
                    <th>Points</th>                  
                </thead>
                <tbody> 
               <tr>
                <td>1</td>  
                <td>Right Answered</td>
                <td>1 mark</td>
                <td>{{$examsurvey->rightAnswer1mark}}</td>
                <td>{{$examsurvey->rightAnswer1mark*1}}</td>
               </tr>
               <tr>
                <td>2</td>  
                <td>Wrong Answered</td>
                <td>1 mark</td>
                <td>{{$examsurvey->wrongAnswer1mark}}</td>
                <td>-{{$examsurvey->wrongAnswer1mark*1*0.1}}</td>
               </tr>
               <tr>
                <td>2</td>  
                <td>Right Answered</td>
                <td>2 mark</td>
                <td>{{$examsurvey->rightAnswer2mark}}</td>
                <td>{{$examsurvey->rightAnswer2mark*2}}</td>
               </tr>
               <tr>
                <td>3</td>  
                <td>Wrong Answered</td>
                <td>2 mark</td>
                <td>{{$examsurvey->wrongAnswer2mark}}</td>
                <td>-{{$examsurvey->wrongAnswer2mark*2*0.1}}</td>
               </tr>
               <tr>
                <td>4</td>  
                <td>Not Answered</td>
                <td>1 mark</td>
                <td>{{$examsurvey->notAnswered1mark}}</td>
                <td>0</td>
               </tr>
               <tr>
                <td>5</td>  
                <td>Not Answered</td>
                <td>2 mark</td>
                <td>{{$examsurvey->notAnswered2mark}}</td>
                <td>0</td>
               </tr>
               <tr class="bg-purple">
                <td>5</td>  
                <td>Obtained Marks</td>
                <td>Total</td>
                <td>{{$examsurvey->rightAnswer1mark+$examsurvey->rightAnswer2mark+$examsurvey->wrongAnswer1mark+$examsurvey->wrongAnswer2mark}}</td>
                <td>{{$examsurvey->total}}</td>
               </tr>
                                         
                </tbody>

            </table>       
    </div>
</div>
     
@stop