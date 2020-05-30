@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        View Test Results
                    </div>

                    <div class="card-body">
                        <h5>Dear, {{ucwords($getUser->name)}}  Thank You for the test..!</h5>
                        Total Number Of Questions : &nbsp; &nbsp; &nbsp; 20
                        <hr>
                        Number Of Attempted Questions  : &nbsp; &nbsp; &nbsp; @if(isset($getUser->total_attempts)) {{ $getUser->total_attempts }} @endif
                        <hr> 
                        Your Score  &nbsp; : &nbsp; &nbsp; &nbsp; @if(isset($getUser->total_score)) {{ $getUser->total_score }} @endif
                    <br/><br/>
                        <a class="btn btn-primary" style="float: right;" href="{{ url('/online-test/completed') }}">Done</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
