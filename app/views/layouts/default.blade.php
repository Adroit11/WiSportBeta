<!doctype html>
<!--    Site Design by Jared Roberts <jaredroberts262@gmail.com>    -->
<!--    Web Development by RJ Ochmann <rgojr2001@yahoo.com>         -->
<html lang="en">

    <head>
        <meta charset="UTF-8">

        <title>WiSport Home</title>
        <?php $userData = Session::get('userData'); ?>
    </head>
    <body>
        <div class="container">
        @include('layouts.partials.nav')


            @yield('content')
            <div class="row">
                <div class="class col-lg-8 col-sm-8">
                    @include('front_page.carousel')
                </div>
                <div class="class col-lg-4 col-sm-4">
                    @include('front_page.announcement')
                </div>
            </div>
            <div class="row">
                <div class="class col-lg-6 col-sm-6">
                    @include('front_page.news_events')
                </div>
                <div class="class col-lg-6 col-sm-6">
                    @include('front_page.quote')
                </div>
            </div>
            <div class="row">
                @include('front_page.benefits')
            </div>
            <div class="class row">
                @include('front_page.signup_section')
            </div>

        @include('layouts.partials.footer')

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
        <!-- Custom styling for main template (landing page) -->
        {{ HTML::style('public/css/main.css'); }}
        <!-- Navbar styling (all pages) -->
        {{ HTML::style('public/css/nav.css'); }}
        {{ HTML::script('/public/assets/js/bootstrap-typeahead.js') }}
        {{ HTML::script('/public/assets/js/bootstrap-datepicker.js') }}
        </div>
    </body>
</html>