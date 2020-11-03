<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    </head>
    <body>
        <p>Welcome</p>
        <script src="{{ asset('js/app.js')}}"></script>
        <script>
            //Subscribe to Test Channel
            Echo.channel('public-event')
                .listen('PublicEvent', (e) => {
                    console.log(e);
                });
        </script>
    </body>
</html>
