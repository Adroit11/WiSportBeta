<!doctype html>
<html>

    <head>


        <meta charset="utf-8">
         <!--jQuery cdn -->
                {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}
                <!-- Latest compiled and minified CSS -->
                {{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css') }}
                <!-- Optional theme -->
                {{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css') }}
                <!-- Latest compiled and minified JavaScript -->
                {{ HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js') }}
                <!-- jQuery UI -->
                {{ HTML::script('//code.jquery.com/ui/1.11.2/jquery-ui.js') }}
                <!-- Datepicker CSS -->
                {{ HTML::style('//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css'); }}
                 <!--link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css"-->
                <!-- Custom styling for main template (landing page) -->
                {{ HTML::style('public/css/main.css'); }}
                <!-- Navbar styling (all pages) -->
                {{ HTML::style('public/css/nav.css'); }}

        @yield('header')

    </head>

    <body>
        @include('layouts.partials.nav')
        @yield('form')


    </body>

</html>