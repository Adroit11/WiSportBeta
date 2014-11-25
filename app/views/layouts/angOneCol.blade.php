<!doctype html>
<!--    Site Design by Jared Roberts <jaredroberts262@gmail.com>    -->
<!--    Web Development by RJ Ochmann <rgojr2001@yahoo.com>         -->
<html lang="en" ng-app>

    <head>
        <meta charset="UTF-8">

        <?php $userData = Session::get('userData'); ?>

        <!-- Latest compiled and minified CSS -->
        {{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css') }}
        <!-- Optional theme -->
        {{ HTML::style('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css') }}
        <!-- Custom styling for main template (landing page) -->
        {{ HTML::style('public/css/main.css'); }}
        <!-- Navbar styling (all pages) -->
        {{ HTML::style('public/css/nav.css'); }}

        <title>WiSport Home</title>

    </head>
    <body>
        <div class="container">
        @include('layouts.partials.nav')

        @yield('content')

        @include('layouts.partials.footer')

        <!-- AngularJs -->
        {{ HTML::script('https://ajax.googleapis.com/ajax/libs/angularjs/1.2.5/angular.min.js') }}
        {{ HTML::script('/js/scoring.js') }}
        <!--jQuery cdn -->
        {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js') }}
        <!-- Latest compiled and minified JavaScript -->
        {{ HTML::script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js') }}
        <!-- jQuery UI -->
        {{ HTML::script('//code.jquery.com/ui/1.11.2/jquery-ui.js') }}

        </div>
    </body>
</html>