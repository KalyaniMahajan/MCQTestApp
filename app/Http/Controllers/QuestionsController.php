<?php

namespace App\Http\Controllers;

use App\User;
use Session;
use App\Question;
use Carbon\Carbon;
use App\QuestionsOption;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    /**
     * Display a Home Screen.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
    	Session::put('userId', $id);
    	$getUser = User::find($id);
    	$now = Carbon::now();
    	if ($now->toDateTimeString() > $getUser->url_token_expired)
    	{
            Session::forget('userId');
    		return abort(404);
    	}
        return view('welcome', compact('getUser'));
    }

    /**
     * Display a listing of Question.
     *
     * @return \Illuminate\Http\Response
     */
    public function getQuestions()
    {
        $getUser = User::find(Session::get('userId'));
        if ($getUser->is_submitted == 1) {
            Session::forget('userId');
            return abort(404);
        }
        $updateUserData = User::where('id', Session::get('userId'))->update(['url_token'=> '']);
       	$questions_options = Question::with('options')->get();
        //dd($questions_options);
        return view('test', compact('questions_options', 'getUser'));
    }

    public function submitTest(Request $request)
    {
    	//dd(Session::get('userId'));
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

    	/*Update user test result */
    	$updateUserData = User::where('id', Session::get('userId'))->update(['total_attempts'=>$attemptCount, 'total_score'=>count($getCorrectAnsOfQue), 'is_submitted' => 1]);
    	$getUser = User::find(Session::get('userId'));

    	return view('test-result', compact('getCorrectAnsOfQue', 'getUser'));
    }

    public function completedTest(){
    	/*Remove token */
    	$updateUserData = User::where('id', Session::get('userId'))->update(['url_token'=> '']);
		return redirect('/'.Session::get('userId'));
    }
}
