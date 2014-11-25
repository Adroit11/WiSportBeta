@extends('...layouts.master')
<?php
    $userData = Session::get('userData');
?>

@section('form')
<div class="container">
    <h1>Register as a New User</h1>

    <div>
    @if ($errors->any())
    <ul>
        @foreach($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
    @endif

    </div>

    <ul class="nav nav-tabs" role="tablist" id="myTab">

        <li role="presentation" id="active" class="active"><a href="#returning" aria-controls="returning" role="tab" data-toggle="tab">Returning Members</a></li>
        <li role="presentation"><a href="#new" aria-controls="new" role="tab" data-toggle="tab">New Members</a></li>

    </ul>

    <!-- Tab panes -->
    <div class="tab-content">

        <div role="tabpanel" class="tab-pane fade in active" id="returning">
            @if(isset($userData[0]->wisportId))
                @include('layouts.partials.registration.renew')
            @else
                @include('layouts.partials.registration.login')
            @endif
        </div>
    <div role="tabpanel" class="tab-pane fade" id="new">
        @include('layouts.partials.registration.signup')
    </div>
<script src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
          data-key="sk_test_mjGdJvNLEPsE7nK8Ql3ciFSt"
          data-amount="3500" data-description="One year's membership"></script>
      </div>


    <script>
        $(function() {
            $( ".datepicker" ).datepicker({

                        changeMonth: true,
                        changeYear: true,
                        yearRange: '1940:2006',
                        dateFormat: 'yy-mm-dd'
                    });

        });
        $(function () {
                        $('#myTab a:last').tab('show')
                    })

                    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                        e.target // newly activated tab
                        e.relatedTarget // previous active tab
                    })
    </script>
</div>
@stop