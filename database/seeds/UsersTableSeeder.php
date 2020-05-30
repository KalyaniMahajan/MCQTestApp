<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Ayush Sahay',
                'email' => 'aayush.sahay1992@gmail.com',
                'url_token' => NULL,
                'started_at' => NULL,
                'submitted_at' => NULL,
                'total_attempts' => 0,
                'total_score' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Aayushi K',
                'email' => 'aayushi.kachhwaha@gmail.com',
                'url_token' => NULL,
                'started_at' => NULL,
                'submitted_at' => NULL,
                'total_attempts' => 0,
                'total_score' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Ankush Deora',
                'email' => 'ankushdeora11@gmail.com',
                'url_token' => NULL,
                'started_at' => NULL,
                'submitted_at' => NULL,
                'total_attempts' => 0,
                'total_score' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Ashwini Yadav',
                'email' => 'ashwini.090494@gmail.com',
                'url_token' => NULL,
                'started_at' => NULL,
                'submitted_at' => NULL,
                'total_attempts' => 0,
                'total_score' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Deepika Azad',
                'email' => 'azaddeepika05@gmail.com',
                'url_token' => NULL,
                'started_at' => NULL,
                'submitted_at' => NULL,
                'total_attempts' => 0,
                'total_score' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Bhagyashri Sonawane',
                'email' => 'bhagyashrisonawane2323@gmail.com',
                'url_token' => NULL,
                'started_at' => NULL,
                'submitted_at' => NULL,
                'total_attempts' => 0,
                'total_score' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Mohit Jindal',
                'email' => 'mohitjindal08295@gmail.com',
                'url_token' => NULL,
                'started_at' => NULL,
                'submitted_at' => NULL,
                'total_attempts' => 0,
                'total_score' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Poonam Powar',
                'email' => 'poonampowar8@gmail.com',
                'url_token' => NULL,
                'started_at' => NULL,
                'submitted_at' => NULL,
                'total_attempts' => 0,
                'total_score' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Pratik Mehta',
                'email' => 'pratik.mehta2713@gmail.com',
                'url_token' => NULL,
                'started_at' => NULL,
                'submitted_at' => NULL,
                'total_attempts' => 0,
                'total_score' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Saba Sayyed',
                'email' => 'sabasayyed22@gmail.com',
                'url_token' => NULL,
                'started_at' => NULL,
                'submitted_at' => NULL,
                'total_attempts' => 0,
                'total_score' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Sagar Ahuja',
                'email' => 'sagarahuja520@gmail.com',
                'url_token' => NULL,
                'started_at' => NULL,
                'submitted_at' => NULL,
                'total_attempts' => 0,
                'total_score' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Samreen Khan',
                'email' => 'samreenkhan077@gmail.com',
                'url_token' => NULL,
                'started_at' => NULL,
                'submitted_at' => NULL,
                'total_attempts' => 0,
                'total_score' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'name' => 'Tarun Shekhar',
                'email' => 'shekhertarun@gmail.com',
                'url_token' => NULL,
                'started_at' => NULL,
                'submitted_at' => NULL,
                'total_attempts' => 0,
                'total_score' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Sneha Mahale',
                'email' => 'sneha.mahale91@gmail.com',
                'url_token' => NULL,
                'started_at' => NULL,
                'submitted_at' => NULL,
                'total_attempts' => 0,
                'total_score' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'Vishaka Alai',
                'email' => 'vishualai@gmail.com',
                'url_token' => NULL,
                'started_at' => NULL,
                'submitted_at' => NULL,
                'total_attempts' => 0,
                'total_score' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Yogesh Pawar',
                'email' => 'yogesh1pawar@gmail.com',
                'url_token' => NULL,
                'started_at' => NULL,
                'submitted_at' => NULL,
                'total_attempts' => 0,
                'total_score' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}