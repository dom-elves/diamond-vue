<html>

    <head>

        <meta charset="UTF-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link href="{{ asset('css/app.css') }}" rel="stylesheet" />

    </head>

    <body style="background-color: #89CFF0">
        
        <div id="app">

            @yield('content') <!-- refers to all -->

        </div>

        <script src="{{ asset('/js/app.js') }}"></script>

    </body>
    
</html>