<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
    	'question_text'
    ];

    public function options()
    {
        return $this->hasMany(QuestionsOption::class, 'question_id');
    }
}
