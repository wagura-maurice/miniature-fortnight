<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Styles -->
        <link href="css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="app">
            <welcome-component></welcome-component>
        </div>
        <!-- Scripts -->
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/vendors.js"></script>
    </body>
</html>
