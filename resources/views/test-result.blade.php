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
                        <h5>Dear, {{ucwords($submitUser->name)}}  Thank You for the test..!</h5>
                        Total Number Of Questions : &nbsp; &nbsp; &nbsp; 20
                        <hr>
                        Number Of Attempted Questions  : &nbsp; &nbsp; &nbsp; @if(isset($submitUser->total_attempts)) {{ $submitUser->total_attempts }} @endif
                        <hr> 
                        Your Score  &nbsp; : &nbsp; &nbsp; &nbsp; @if(isset($submitUser->total_score)) {{ $submitUser->total_score }} @endif
                    <br/><br/>
                        {{-- <button class="btn btn-primary" style="float: right;" onclick="window.close()">Close This Window</button> --}}
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
