<html lang="en">
    <head>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="utf-8" />
        <title> All Items </title>
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    </head>

    <body>
        <div id="app">
            <example-component data_url="{{ route("item.all") }}">

            </example-component>
        </div>
        
        <script src="{{ asset("js/app.js") }}">  </script>
    </body>
</html>