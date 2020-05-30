<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="/css/app.css" rel="stylesheet">
        <style type="text/css">
            .questions-row {
                background-color: #03A9F4;
                padding: 6px;
                border: 1px solid #FFF;
                color: #fff;
            }
            .card-header {
                background-color: #0288D1; 
                color: #fff;
            }
        </style>
    </head>

    <body>
        <div class="">
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #e9ecef !important;padding: 0.2rem 1rem;">
                <span class="navbar-brand">
                    <img src="images/logo.png" style="width: 172px; height: 55px;">
                </span>
            </nav>
            <br/><br/>
            @yield('content')
        </div>
        <script src="/js/app.js"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    </body>
</html>