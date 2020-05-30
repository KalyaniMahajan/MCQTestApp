@extends('layouts.app')

@section('content') 
<div class="container">
    <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <b>Number of questions : 20</b>

                        <span style="float: right;">
                             Time left : &nbsp;
                            <div id="display" style="float: right;"> 30 mins : 00 secs</div>
                            <div id="submitted" style="float: right;"></div>
                        </span>
                    </div>

                    <form action="{{ url('/online-test/submitted') }}" id="quizfrm" method="POST">
                        @csrf
                        @if(isset($questions_options))
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                @php $i = 1; @endphp
                                @if(count($questions_options) > 0)
                                    @foreach($questions_options as $que) 
                                    <div class="col col-md-12 questions-row">
                                        <strong>Q. #{{$i}} : &nbsp; &nbsp;</strong>
                                        <span>
                                            {{$que->question_text}}
                                        </span>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col col-md-12">
                                        <div class="form-group">
                                            @foreach($que->options as $ptn)
                                            <br>
                                                <div class="custom-control custom-radio custom-control-inline">
                                                    <input type="radio" class="custom-control-input" id="{{$ptn->id}}" name="answers[{{$ptn->question_id}}]" value="{{$ptn->id}}">
                                                    <label class="custom-control-label" for="{{$ptn->id}}">&nbsp; {{$ptn->option}}</label>
                                                </div>
                                            <br>
                                            @endforeach
                                        </div>
                                    </div>
                                    @php $i++ @endphp
                                    @endforeach
                                @endif
                                </div>

                                <button class="btn btn-primary" type="submit">Sabmit</button>
                            </div>
                        </div>
                        @endif
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    function disable_f5(e)
    {
      if ((e.which || e.keyCode) == 116)
      {
          e.preventDefault();
      }
    }

    $(document).ready(function(){
        $(document).bind("keydown", disable_f5);    
    });

    
    function CountDown(duration, display) {
        if (!isNaN(duration)) {
            var timer = duration, minutes, seconds;
            
          var interVal=  setInterval(function () {
                minutes = parseInt(timer / 60, 10);
                seconds = parseInt(timer % 60, 10);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                $(display).html("<b>" + minutes + " mins : " + seconds + " secs" + "</b>");
                if (--timer < 0) {
                    timer = duration;
                   SubmitFunction();
                   $('#display').empty();
                   clearInterval(interVal)
                }
                },1000);
        }
    }
    
    function SubmitFunction(){
        $('#submitted').html("<h5 style='color:red;'>Time Up..!</h5>");
        $('#quizfrm').trigger('submit');
        //window.location.href = "{{url('/online-test/completed')}}";
    }

    CountDown(1800,$('#display'));
</script>
@stop
  
   
