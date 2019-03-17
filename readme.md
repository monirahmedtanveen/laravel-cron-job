## Sheduling Task With Cron Job in Laravel

Sometimes applications require some task to be run periodically on the server. It can be sending push notification, trashing unwanted data from database, creating backups etc. This can be done easily using cron job in laravel. This project has the code to send email using scheduler of laravel. 

## Installation Process

1. At first create a database :- 'your_database'.
2. In .env file change the following line:- 
DB_DATABASE=your_database
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
3. Then cd to the project directory and run the following command:-
php artisan migrate 
4. For users table seed run the following command:-
php artisan db:seed

This will complete the installation process.

## Cron Job Command For Sending Email

In App\Console\Commands\SendEmailToUser.php you will get your command for performing sheduled task.
<code>protected $signature = 'send:email';</code>
send:email is your command. You can change it according to your need. 

## Demonstration
Demonstration of 'Sheduling Task With Cron Job in Laravel' will be written soon.
