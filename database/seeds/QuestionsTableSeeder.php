<?php

use Illuminate\Database\Seeder;

class QuestionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('questions')->delete();
        
        \DB::table('questions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question_text' => 'Where do we need to set the database connection in Laravel?',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'question_text' => 'In Laravel, interpolation is done by using which symbol?',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
            'question_text' => 'What would this touch function do? $obj=User: :find(1); $obj->touch();',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'question_text' => 'After running "artisan down", the project will show the mainenance page. What would be the HTTP status return code?',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'question_text' => 'Which direcotry contains "robot.txt" file?',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
            'question_text' => '$user = DB::table(\'users\')->SomeName()->first();    For getting newest registered user in the above fuction, what would be the below options to replace by SomeName',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'question_text' => 'What funtions are used for database migration classes?',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'question_text' => 'How can you set a session in Laravel?',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'question_text' => 'Which of the following directory is not inside the app directory?',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'question_text' => 'How can you create a controller using CLI in Laravel?',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'question_text' => 'View files in Laravel have the following extension',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'question_text' => 'How do you clear chache in Laravel?',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'question_text' => 'How do you get ip address in Laravel?',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'question_text' => 'Which of the following are Laravel array helper functions?',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'question_text' => 'How to get the current action name in Laravel?',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'question_text' => 'How can you get the current route name in Laravel?',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'question_text' => 'Which command is used to remove all rows from a table?',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'question_text' => 'Which of the Following is not avaible in MySQL',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'question_text' => 'In a LIKE clause, you can ask for any 6 letter value by',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'question_text' => 'Which function returns reference to Array of row values?',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
            'question_text' => 'The function \'fetchthrow_hashref()\' returns reference to hash of Row Values keyed in by',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'question_text' => 'Which kind of replication is supported by MySQL Server?',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'question_text' => 'What is the name of the DLL that contains the AJAX toolkit',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'question_text' => 'Which of the following is used to parse a JSON text',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'question_text' => 'Which of the following Jquery method gets the direct parent of an element? ',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'question_text' => 'In JavaScript, _________ is an object of the target language data type that encloses an object of the source language',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'question_text' => 'To enable data tainting, the end user sets the _________ environment variable',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'question_text' => 'Which is the correct way to write a JavaScript array?',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'question_text' => 'The syntax of Eval is',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'question_text' => 'How to create a Date object in JavaScript?',
                'created_at' => '2020-05-30 16:06:13',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}