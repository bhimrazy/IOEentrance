@extends('layouts.subscriber')

@section('content')

<div class="card">
    <div class="card-header"> {{ ucfirst(Auth::user()->name)}} Dashboard</div>

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
    </div>
    <div class="card-body">

    </div>
   
       
 
    <!-- end col -->
</div>
@endsection
