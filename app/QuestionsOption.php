<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionsOption extends Model
{
    protected $fillable = [
    	'question_id',
    	'option',
    	'correct'
    ];

    public function question()
    {
        return $this->belongsTo(Question::class, 'question_id');
    }
}
