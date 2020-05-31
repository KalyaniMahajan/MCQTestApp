@extends('layouts.app')

@section('content')    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <b>You can take the test only once.</b>

                    <span style="float: right;">Number of questions : 20  |  
                    Time left : &nbsp; 20 minutes
                </div>

                <div class="card-body">
                    <div>
                        <span style="float: left;">Name &nbsp;&nbsp;&nbsp;: &nbsp;<b>{{ strToUpper($user->name) }}</b> </span>
                        <span style="float: right;">Email &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;{{$user->email}}</span>
                    </div>
                    <br><hr>
                    <div class="introduction">
                        <h4><b><u>General Instructions: </u></b></h4> Please read the below instructions carefully while appearing for the online test here.

                        <ul>
                        <li>The test consists of 30 MCQ questions. You will have 20 minutes to answer all 30 questions. </li>
                        <li>Please note that attempting a minimum of 22 questions is required to <strong>qualify</strong> for the next round.</li>
                        <li>Once you start the test, you will not be able to <strong>retake</strong> it again.</li>
                        <li>Kindly <strong>dont reload</strong> the tab or <strong>close</strong> the browser Once click on Start Test, you will not be able to <strong>retake</strong> it again.</li>
                        <li>If you <strong>accidentally close</strong> this window, your test will be <strong>cancelled</strong>.</li>
                        <li>Once Time is Up, The form will <strong>auto submitted</strong> (If not submitted by the user before).</li>
                        <li>This is the 1st phase of a 4 phase interview round.</li>
                        <li>This test link is valid till Sunday, 31st May 2020, 23:59 HRS.</li>
                        </ul><br>
                        <h6>All The Best!</h6>
                    </div>
                    <hr>
                    <button type="button" class="btn btn-primary" onclick="window.location='{{ route('test.start', Request::segment(2)) }}'">Start Test</button>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
