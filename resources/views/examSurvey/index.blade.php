@if(Auth::user()->role->name=='Admin'){
    @extends('layouts.master')
}
@elseif(Auth::user()->role->name=='subAdmin'){
    @extends('layouts.master')
}
@elseif(Auth::user()->role->name=='Subscriber'){
    @extends('layouts.subscriber')
}
@endif
@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"> All Questions</h3>  
    </div>
</div>
<form action="{{route('examsurvey.store')}}" method="post">
    @csrf
    @if ($questions->count()>0) 
        @foreach ($questions as $key =>$question)
            <div class="box mt-2">
                <div class="box-header"><span><strong>{{$key+1}} </strong>.</span>{{$question->title}}</div>

                <div class="box-body pt-2">
                    <h6>Options</h6>
                    <ul class="list-group">
                        @foreach ($question->options as $option)
                        <li class="list-group-item m-1 rounded">
                        <label for="option{{$option->id}}">{{$k}}.  <input type="radio" name="responses[{{$key}}][option_id]" class="mr-2" 
                            id="option{{$option->id}}" value="{{$option->id}}">{{$option->option}} 
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
        <button type="submit" class="btn btn-dark">Submit Your Answers</button>
    </div>
</form> 
@stop
