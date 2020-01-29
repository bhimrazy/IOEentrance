@extends('layouts.exam')
@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"> RESULT</h3>  
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
                <td>{{$rightAnswer_1mark}}</td>
                <td>{{$rightAnswer_1mark*1}}</td>
               </tr>
               <tr>
                <td>2</td>  
                <td>Wrong Answered</td>
                <td>1 mark</td>
                <td>{{$wrongAnswer_1mark}}</td>
                <td>-{{$wrongAnswer_1mark*1*0.1}}</td>
               </tr>
               <tr>
                <td>2</td>  
                <td>Right Answered</td>
                <td>2 mark</td>
                <td>{{$rightAnswer_2mark}}</td>
                <td>{{$rightAnswer_2mark*2}}</td>
               </tr>
               <tr>
                <td>3</td>  
                <td>Wrong Answered</td>
                <td>2 mark</td>
                <td>{{$wrongAnswer_2mark}}</td>
                <td>-{{$wrongAnswer_2mark*2*0.1}}</td>
               </tr>
               <tr>
                <td>4</td>  
                <td>Not Answered</td>
                <td>1 mark</td>
                <td>{{$notAnswered_1mark}}</td>
                <td>0</td>
               </tr>
               <tr>
                <td>5</td>  
                <td>Not Answered</td>
                <td>2 mark</td>
                <td>{{$notAnswered_2mark}}</td>
                <td>0</td>
               </tr>
               <tr class="bg-purple">
                <td>5</td>  
                <td>Obtained Marks</td>
                <td>Total</td>
                <td>{{$rightAnswer_1mark+$rightAnswer_2mark+$wrongAnswer_1mark+$wrongAnswer_2mark}}</td>
                <td>{{($rightAnswer_1mark*1+$rightAnswer_2mark*2)-($wrongAnswer_1mark*1+$wrongAnswer_2mark*2)*0.1}}</td>
               </tr>
                                         
                </tbody>

            </table>       
    </div>
</div>
@foreach ($questions as $key =>$question)
    @foreach ($responses as $response)
        @if($question->id== $response['question_id'])
            <div class="box mt-2">
                <div class="box-header with-border">
                    <h3 class="box-title"><span><strong>{{$key+1}}</strong>.</span><span>{!!$question->title!!}</span></h3>  
                </div>
                <div class="box-body pt-2">
                    <h5>Options</h5>                 
                    <ul class="list-group">
                        @if(count($response)>1)
                            @foreach ($question->options as $k => $option)
                                @if ($question->correctanswer['correctanswer'] == $option->id)
                                    <li class="list-group-item bg-olive m-1 rounded">
                                        <p><strong>{{$k+1}}</strong>&nbsp;{{$option->option}}</p>
                                    </li>  
                                @else
                                    @if($option->id ==$response['option_id'])
                                        @if ($option->id != $question->correctanswer['correctanswer'])
                                            <li class="list-group-item bg-maroon m-1 rounded">
                                                <p><strong>{{$k+1}}</strong>&nbsp;{{$option->option}}</p>
                                            </li>
                                        @endif      
                                    @else
                                        <li class="list-group-item m-1 rounded">
                                            <p><strong>{{$k+1}}</strong>&nbsp;{{$option->option}}</p>
                                        </li> 
                                    @endif
                                @endif
                            @endforeach 
                        @else
                        <small class="btn btn-default btn-xs bg-navy">This question was not answered.</small>
                            @foreach ($question->options as $k => $option)
                                @if ($question->correctanswer['correctanswer'] == $option->id)
                                    <li class="list-group-item bg-olive m-1 rounded">
                                        <p><strong>{{$k+1}}</strong>&nbsp;{{$option->option}}</p>
                                    </li>  
                                @else
                                    <li class="list-group-item m-1 rounded">
                                        <p><strong>{{$k+1}}</strong>&nbsp;{{$option->option}}</p>
                                    </li>   
                                @endif
                            @endforeach  
                        @endif                          
                    </ul>
                </div>
            </div>    
    @endif
    @endforeach
@endforeach       
@stop