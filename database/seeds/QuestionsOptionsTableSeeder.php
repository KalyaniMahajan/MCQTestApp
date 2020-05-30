<?php

use Illuminate\Database\Seeder;

class QuestionsOptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('questions_options')->delete();
        
        \DB::table('questions_options')->insert(array (
            0 => 
            array (
                'id' => 1,
                'question_id' => 1,
                'option' => 'setting.php',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'question_id' => 1,
                'option' => 'config.php',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'question_id' => 1,
                'option' => '.env file',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'question_id' => 1,
                'option' => 'in seed files',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'question_id' => 2,
                'option' => '{}',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'question_id' => 2,
                'option' => '{{}}',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'question_id' => 2,
                'option' => '""',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'question_id' => 2,
                'option' => '[]',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'question_id' => 3,
                'option' => 'store a user in object cache',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'question_id' => 3,
                'option' => 'update updated_at to current timestamp ',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'question_id' => 3,
                'option' => 'created a new field in database',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'question_id' => 3,
                'option' => 'None of these',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'question_id' => 4,
                'option' => '404',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'question_id' => 4,
                'option' => '300',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'question_id' => 4,
                'option' => '303',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'question_id' => 4,
                'option' => '503',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'question_id' => 5,
                'option' => 'app',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'question_id' => 5,
                'option' => 'public',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'question_id' => 5,
                'option' => 'config',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'question_id' => 5,
                'option' => 'routes',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'question_id' => 6,
                'option' => 'last',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'question_id' => 6,
                'option' => 'newest',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'question_id' => 6,
                'option' => 'last_user',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'question_id' => 6,
                'option' => 'latest',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'question_id' => 7,
            'option' => 'migrate() and upmigrate()',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'question_id' => 7,
            'option' => 'insert() and rollback()',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'question_id' => 7,
            'option' => 'up() and down()',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'question_id' => 7,
            'option' => 'migrate_up() and migrate_down()',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'question_id' => 8,
            'option' => '$request->db->session(\'key\',\'value\');',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'question_id' => 8,
            'option' => '$request->session()->put(\'key\',\'value\');',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'question_id' => 8,
            'option' => '$request->session()->set(\'key\',\'value\');',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'question_id' => 8,
                'option' => 'None of the Above',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'question_id' => 9,
                'option' => 'resources',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'question_id' => 9,
                'option' => 'console',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'question_id' => 9,
                'option' => 'events',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'question_id' => 9,
                'option' => 'broadcasting',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'question_id' => 10,
                'option' => 'php artisan make:request controller_name',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'question_id' => 10,
                'option' => 'php artisan make:controller --generate',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'question_id' => 10,
                'option' => 'php artisan make:controller',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'question_id' => 10,
                'option' => 'php artisan make:generate controller_name',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'question_id' => 11,
                'option' => '.php',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'question_id' => 11,
                'option' => '.php.blade',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'question_id' => 11,
                'option' => '.blade.php',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'question_id' => 11,
                'option' => '.lar.php',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'question_id' => 12,
                'option' => 'php artisan cache:clear',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'question_id' => 12,
                'option' => 'php artisan config:clear',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'question_id' => 12,
                'option' => 'Both A and B',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'question_id' => 12,
                'option' => 'Only A',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'question_id' => 13,
            'option' => '$request->ip()',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'question_id' => 13,
            'option' => '$request->ip_address()',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'question_id' => 13,
            'option' => '$request->ipAddress()',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'question_id' => 13,
                'option' => 'None of the Above',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'question_id' => 14,
            'option' => 'Arr::add()',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'question_id' => 14,
            'option' => 'Arr::has()',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'question_id' => 14,
            'option' => 'Arr::only()',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'question_id' => 14,
                'option' => 'All of the Above',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'question_id' => 15,
            'option' => 'request()->DB->getActionMethod()',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'question_id' => 15,
            'option' => 'request()->getActionMethod()',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'question_id' => 15,
            'option' => 'request()->route()->getActionMethod()',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'question_id' => 15,
                'option' => 'Both A and B',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'question_id' => 16,
            'option' => 'request()->route->getName()',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'question_id' => 16,
            'option' => 'request()->route()->routeName()',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'question_id' => 16,
            'option' => 'request()->getName()',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'question_id' => 16,
                'option' => 'None of the Above',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'question_id' => 17,
                'option' => 'Delete',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'question_id' => 17,
                'option' => 'Truncate',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'question_id' => 17,
                'option' => 'Both A and B',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'question_id' => 17,
                'option' => 'Remove',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'question_id' => 18,
                'option' => 'LIKE',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'question_id' => 18,
                'option' => 'JOIN',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'question_id' => 18,
                'option' => 'REVOKE',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'question_id' => 18,
                'option' => 'FETCH',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'question_id' => 19,
            'option' => '?LIKE ______ (that\'s Six Underscore Characters)',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'question_id' => 19,
                'option' => '?LIKE ??????',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'question_id' => 19,
                'option' => '?LIKE ^.{6}$',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'question_id' => 19,
                'option' => '?LIKE .{6}',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'question_id' => 20,
            'option' => '?Fetch()',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'question_id' => 20,
            'option' => '?Fetchrow_array()',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'question_id' => 20,
            'option' => '?Fetchrow_hashref()',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'question_id' => 20,
            'option' => '?Fetchrow_arrayref()',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'question_id' => 21,
                'option' => 'Row Name',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'question_id' => 21,
                'option' => 'Column Name',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'question_id' => 21,
                'option' => 'Database Name',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'question_id' => 21,
                'option' => 'Table Name',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'question_id' => 22,
                'option' => '?Multiple-master Replication',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'question_id' => 22,
                'option' => '?Single File Based Clustering',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'question_id' => 22,
                'option' => ' Master To Slave Replication',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'question_id' => 22,
                'option' => 'None of the Above',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'question_id' => 23,
                'option' => 'Ajaxcontroltoolkit.dll',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'question_id' => 23,
                'option' => 'Ajaxtoolkit.dll',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'question_id' => 23,
                'option' => 'Ajaxcontrol.dll',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'question_id' => 23,
                'option' => 'control.dll',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'question_id' => 24,
            'option' => 'JQuery.parseJSON()',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'question_id' => 24,
            'option' => 'JQuery.noConflict()',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'question_id' => 24,
            'option' => 'JQuery.each()',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'question_id' => 24,
                'option' => 'None of the Above',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'question_id' => 25,
            'option' => '?OffsetParent( Selector )',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'question_id' => 25,
            'option' => ' Parent( Selector )',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'question_id' => 25,
            'option' => ' Offset( Selector)',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'question_id' => 25,
                'option' => 'None of the Above',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'question_id' => 26,
                'option' => 'a wrapper',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'question_id' => 26,
                'option' => 'a link',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'question_id' => 26,
                'option' => 'a cursor',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'question_id' => 26,
                'option' => 'a form',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'question_id' => 27,
                'option' => 'ENABLE_TAINT',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'question_id' => 27,
                'option' => 'NS_ENABLE_TAINT',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'question_id' => 27,
                'option' => 'MS_ENABLE_TAINT',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'question_id' => 27,
                'option' => 'ENABLE_TAINT_NS',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'question_id' => 28,
            'option' => 'var txt = new Array(1:"tim",2:"kim",3:"jim")',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'question_id' => 28,
            'option' => 'var txt = new Array:1=("tim")2=("kim")3=("jim")',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'question_id' => 28,
            'option' => 'var txt = new Array("tim","kim","jim")',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
                'question_id' => 28,
                'option' => 'var txt = new Array="tim","kim","jim"',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'question_id' => 29,
            'option' => '[EvalName.]eval(string)',
                'correct' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'question_id' => 29,
            'option' => '[objectName.]eval(string)',
                'correct' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'question_id' => 29,
                'option' => '[objectName.]eval(numeriC.',
                    'correct' => 0,
                    'created_at' => NULL,
                    'updated_at' => NULL,
                ),
                115 => 
                array (
                    'id' => 116,
                    'question_id' => 29,
                    'option' => '[EvalName.]eval(numeriC.',
                        'correct' => 0,
                        'created_at' => NULL,
                        'updated_at' => NULL,
                    ),
                    116 => 
                    array (
                        'id' => 117,
                        'question_id' => 30,
                    'option' => 'dateObjectName Date([parameters])',
                        'correct' => 0,
                        'created_at' => NULL,
                        'updated_at' => NULL,
                    ),
                    117 => 
                    array (
                        'id' => 118,
                        'question_id' => 30,
                    'option' => 'dateObjectName.new Date([parameters])',
                        'correct' => 0,
                        'created_at' => NULL,
                        'updated_at' => NULL,
                    ),
                    118 => 
                    array (
                        'id' => 119,
                        'question_id' => 30,
                    'option' => 'dateObjectName := new Date([parameters])',
                        'correct' => 0,
                        'created_at' => NULL,
                        'updated_at' => NULL,
                    ),
                    119 => 
                    array (
                        'id' => 120,
                        'question_id' => 30,
                    'option' => 'dateObjectName = new Date([parameters])',
                        'correct' => 1,
                        'created_at' => NULL,
                        'updated_at' => NULL,
                    ),
                ));
        
        
    }
}