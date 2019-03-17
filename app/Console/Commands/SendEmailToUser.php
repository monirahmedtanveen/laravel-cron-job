<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\User;

class SendEmailToUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sending a notification email about task to all users';

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
        /** Sending Email */
        $users = User::limit(5)->get();

        foreach ($users as $user) {
            $mail_body = "HI {$user->name}, Get ready for work." . PHP_EOL;
            Mail::raw($mail_body, function ($mail) use ($user) {
                $mail->from('yourmail@yourmail.com');
                $mail->to($user->email)
                    ->subject('Work Alert');
            });
        }

        $this->info('Notification Email Sent to All Users');
    }
}
