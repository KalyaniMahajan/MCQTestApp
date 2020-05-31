<?php

namespace App\Http\Controllers;

use App\User;
use App\Question;
use Carbon\Carbon;
use App\QuestionsOption;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as RequestRoute;


class TestController extends Controller
{
    public function welcome($token)
    {
        $user = User::where([['url_token', $token],['started_at', NULL]])->first();
        if ($user) {
            return view('welcome')->with(compact('user'));
        } else {
            return abort(403, 'This Link is Expired');
        }
    }


    public function startTest($token)
    {
        $user = User::where([['url_token', $token],['started_at', NULL]])->first();
        if ($user) {
            $user->update(array('started_at'=>Carbon::now()));
            $questions_options = Question::with('options')->get();
            return view('test')->with(compact('questions_options'));
        } else {
            return abort(403, 'This Link is Expired');
        } 
    }

    public function submitTest(Request $request)
    {

        $submitUser = User::where([['url_token', RequestRoute::segment(2)],['submitted_at',NULL]])->first();
        
        // dd($submitUser->name);
        // return 'Wait';
        
        if ($submitUser) {
            $getCorrectAnsOfQue = [];
            $attemptCount = 0;
    
            /* get attempt count */
            if($request->answers>0) { 
                $attemptCount = count($request->answers);
                /* check user selected answer is correct or not */
                foreach($request->answers as $key=>$value) {
                    $result = QuestionsOption::where('question_id', $key)
                                        ->where('id', $value)
                                        ->where('correct', 1)->get()->toArray();
    
                    $getCorrectAnsOfQue = Arr::collapse([$getCorrectAnsOfQue, $result]);
                }
            }

            $submitUser->update(array('submitted_at' => Carbon::now(),'total_attempts'=>$attemptCount,'total_score'=>count($getCorrectAnsOfQue)));
    
            /*Update user test result */
            // $submitUser = User::where([['url_token', RequestRoute::segment(2)],['submitted_at',NULL]])->update(['total_attempts'=>$attemptCount, 'total_score'=>count($getCorrectAnsOfQue)]);
            
            return view('test-result', compact('getCorrectAnsOfQue', 'submitUser'));   
        } else {
            return abort(403, 'This Link is Expired');
        }
    }

}
