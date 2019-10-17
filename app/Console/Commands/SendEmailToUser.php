<?php

namespace App\Console\Commands;

use App\Mail\SendUserNotification;
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
            retry(5, function () use ($user) {
                Mail::to($user)->send(new SendUserNotification($user));
            }, 100);
        }

        $this->info('Notification Email Sent to All Users');
    }
}
