<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />

        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Talk Studio</title>

        <link rel="stylesheet" href="{{ mix('css/app.css', 'assets/build') }}">
        <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:700|Source+Sans+Pro:300,400,600" rel="stylesheet">
    </head>

    <body>
        <div id="app">
            @yield('content')
        </div>

        <script src="{{ mix('js/app.js', 'assets/build') }}"></script>
    </body>
</html>
