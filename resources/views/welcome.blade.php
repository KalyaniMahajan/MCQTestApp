@extends('layouts.app')

@section('content')    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <b>You can take the test only once.</b>

                    <span style="float: right;">Number of questions : 20  |  
                    Time left : &nbsp; 30 minutes
                </div>

                <div class="card-body">
                    <div>
                        <span style="float: left;">Name &nbsp;&nbsp;&nbsp;: &nbsp;<b>{{ strToUpper($getUser->name) }}</b> </span>
                        <span style="float: right;">Email &nbsp;&nbsp;&nbsp;&nbsp;: &nbsp;{{$getUser->email}}</span>
                    </div>
                    @if($getUser->url_token)
                    <br><hr>
                        <div class="introduction">
                            <h4><b><u>General Instructions: </u></b></h4> Please read the below instructions carefully while appearing for the online test here.

                            <ul>
                            <li>Total number of questions 20. Total of 30 minutes duration will be given to attempt all 20 questions.</li>
                            <li>The clock has been set at the server and countdown timer displayed at the top of the question numer pattern will update you on remaining time to complete the exam. When the clock reached to 0 the exam will automatically close and it will display the report page where you can find all the correct and wrong question along with total marks.</li>
                            <li>The question number box at the right side of the screen represents one of the below status. Initially it is in black color when starting of the exam. Red color indicates not attempted or skipped questions; Black color indicates not visited questions. Green color indicates attempted questions.</li>
                            <li>All twenty (20) questions are multiple choices. You can navigate to any question by clicking the question number at the right side. It will navigate to respective question. By clicking next option you can see upcoming question. If you want to see answer for any question instance click on view answer at the same way click solution for explanation.</li>
                            <li>The weight age for each question is 1(one) mark. Penalty for wrong answer is 0.25. No negative marks for skipped questions or un attempted questions. To complete the test click on END TEST button. Do not refresh the page while writing the exam. For any assist please contact admin by dropping a mail which is available at contact us page. All the best. Keep visiting our website for new updates</li>
                            Thanks.
                            </ul>
                        </div>
                        <hr>
                        <form action="{{ route('online-test') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary">Start Test</button>
                        </form>
                    @else
                        <br><hr>
                        <h4 style="text-align: center;color: red;">This link is not valid...!</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@stop
