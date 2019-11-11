<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <link rel="shortcut icon" type="image/png" href="{{ asset('static/logo/GMI-emblem.png') }}"/>
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Style -->
        <link href="{{ mix('css/app.css') }}" type="text/css" rel="stylesheet">

        <!-- Icons -->
        <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css">
    </head>
    <body>
        <div id="app">
            <main>
                @yield('content')
            </main>
        </div>

        <!-- Script -->
        <script src="{{ mix('js/app.js') }}" type="text/javascript"></script>
    </body>
</html>
