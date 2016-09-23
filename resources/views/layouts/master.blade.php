<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Kontak</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
        h1.title {
            color: #00B1B4;
        }
        </style>
    </head>
    <body class="standard">
        <div class="container">
            <h1 class="title">Kontak</h1>
            <menu></menu>

            @yield('content')

        </div>
    </body>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    <script>
        window.Laravel = { csrfToken: '{{ csrf_token() }}' };    
    </script>
</html>
