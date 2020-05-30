<?php

namespace App\Console\Commands;

use App\User;
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
        $users = User::all();
        foreach ($users as $user) {
            $emailBody = $user->name;
            $emailContent = array('emailBody' => $emailBody);

            Mail::send(['html' => 'emails.testemail_template'], $emailContent, function ($mail) use ($user) {
                $mail->from('kalyani.mahajan@onclavesystems.com');
                $mail->to($user->email)
                    ->subject('MCQ Test');
            });
            $this->info('Test email sent to All Users');
        }

    }
}
