<?php

namespace App\Console\Commands;

use DB;
use App\User;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class UserTestLinkCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:testmail';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send MCQ test email to all users';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $dt = Carbon::now();
        $starttime = $dt->toDateTimeString();
        $endtime = Carbon::Create('2020-05-31 23:59:00')->toDateTimeString();
        $updateTimes = DB::table('users')->update(['url_token_active'=>$starttime, 'url_token_expired'=>$endtime]);


        $users = User::all();
        foreach ($users as $user) {
            $name = $user->name;
            $link = substr(md5(rand()), 0, 10);
            $user->update(array('url_token'=>$link));
            $emailContent = array('name' => $name, 'link'=> $link);

            Mail::send(['html' => 'emails.testemail_template'], $emailContent, function ($mail) use ($user) {
                $mail->from('no-reply@onclavesystems.com');
                $mail->to($user->email)
                    ->subject('MCQ Test');
            });
            $this->info('Test email sent to All Users');
        }

    }
}
