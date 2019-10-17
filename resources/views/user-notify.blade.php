<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>User Notification</title>
    </head>
    <body>
        <h1>Hello {{ $user->name }}</h1>
        <p>Get ready for work.</p>
    </body>
</html>
