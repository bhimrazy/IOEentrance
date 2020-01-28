@extends('layouts.exam')
@section('content')
<div class="box">
    <div class="box-header with-border">
    <h3 class="box-title"> All Questions <span>&nbsp;&nbsp;Total : {{$questions->count()}}</span> </h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="text-danger"><span id="timer">Time Remaining : 02:00:00</span></span>
   </div>
</div>
<form id="entranceExam" action="{{route('examsurvey.store')}}" method="post">
    @csrf
    @if ($questions->count()>0) 
        @foreach ($questions as $key =>$question)
            <div class="box mt-2">
                <div class="box-header with-border">
                    <h3 class="box-title"><span><strong>{{$key+1}}</strong>.</span><span>{!!$question->title!!}</span></h3>  
                </div>
                <div class="box-body pt-2">
                    <h6>Options</h6>
                    <ul class="list-group">
                        @foreach ($question->options as $k => $option)
                        <li class="list-group-item m-1 rounded">
                        <label for="option{{$option->id}}">{{$k+1}}.&nbsp;&nbsp;<input type="radio" name="responses[{{$key}}][option_id]" class="mr-2" 
                            id="option{{$option->id}}" value="{{$option->id}}">&nbsp;&nbsp;{{$option->option}} 
                        <input type="hidden" name="responses[{{$key}}][question_id]" value="{{$question->id}}">
                        </label>
                        </li> 
                        @endforeach       
                    </ul>
                </div>
            </div>    
        @endforeach        
    @endif 
    <div class="text-center p-2">
        <button type="submit" class="btn bg-navy">Submit Your Answers</button>
    </div>
</form> 
<script>
    var time = 7200;
    function timer(){
    time=time-1;
    if(time<=0){
        document.getElementById("entranceExam").submit();
    }
    var sec=time%60;
    var min=Math.floor(time/60);
    var hr=Math.floor(min/60);
    min=min%60;
    var newTime = "Time Remaining :" +hr+":"+min+":"+sec;
   document.getElementById("timer").innerHTML=newTime;
    }
    setInterval(timer,1000);
</script>
@stop
