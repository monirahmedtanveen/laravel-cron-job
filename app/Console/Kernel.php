<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        'App\Console\Commands\SendEmailToUser',
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->command('send:email')
            ->everyMinute();    /** Run the task every minute */

            /** Diffrent Scheduling Options */
            // ->cron('* * * * * *'); 	                /** Run the task on a custom Cron schedule */
            // ->everyFiveMinutes();                    /** Run the task every five minutes */
            // ->everyTenMinutes();                     /** Run the task every ten minutes */
            // ->everyFifteenMinutes();                 /** Run the task every fifteen minutes */
            // ->everyThirtyMinutes();                  /** Run the task every thirty minutes */
            // ->hourly();                              /** Run the task every hour */
            // ->hourlyAt(17);                          /** Run the task every hour at 17 mins past the hour */
            // ->daily();                               /** Run the task every day at midnight */
            // ->dailyAt('13:00');                      /** Run the task every day at 13:00 */
            // ->twiceDaily(1, 13);                     /** Run the task daily at 1:00 & 13:00 */
            // ->weekly();                              /** Run the task every week */
            // ->weeklyOn(1, '8:00');                   /** Run the task every week on Tuesday at 8:00 */
            // ->monthly();                             /** Run the task every month */
            // ->monthlyOn(4, '15:00');                 /** Run the task every month on the 4th at 15:00 */
            // ->quarterly();                           /** Run the task every quarter */
            // ->yearly();                              /** Run the task every year */
            // ->timezone("America/New_York");          /** Set the timezone */

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
