<!DOCTYPE html>
<html lang="en">
  <head>
    @include('layouts.partials/header2')

  </head>

  <body>

    @include('layouts.partials/nav')

    <!--div class="container"-->
    <div class="row">
        <div class="col-lg-12">
        @yield('content')
        @include('layouts.partials.sidebar')

        </div>
        



      
      @include('layouts.partials/footer2')

    @include('layouts.partials/scripts')
  </body>
</html>