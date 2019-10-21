## Sheduling Task With Cron Job in Laravel

Sometimes applications require some task to be run periodically on the server. It can be sending push notification, trashing unwanted data from database, creating backups etc. This can be done easily using cron job in laravel. This project has the code to send email using scheduler of laravel. 

## Installation Process

1. At first cd to the project directory and run the following command :- 
<br>composer install 
2. Create a database on your database management system :- 'your_database'.
3. In .env file change the following line:- 
<br>DB_DATABASE=your_database
<br>DB_USERNAME=your_database_username
<br>DB_PASSWORD=your_database_password
4. Then cd to the project directory and run the following command:-
<br>php artisan migrate 
5. For users table seed run the following command:-
<br>php artisan db:seed

This will complete the installation process.

## Cron Job Command For Sending Email

In App\Console\Commands\SendEmailToUser.php you will get your command for performing sheduled task.
<code>protected $signature = 'send:email';</code>
send:email is your command. You can change it according to your need. 

## Demonstration
For details description go to [this](https://monirahmedtanveen.github.io/tech.logs/2019/09/28/scheduling-task-with-cron-job-in-laravel.html) link.