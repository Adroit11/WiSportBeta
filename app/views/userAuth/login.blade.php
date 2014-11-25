@extends('...layouts.default')


@section('content')

    Welcome to WiSport!
    <div class="container">
        {{ Form::open(array('route' => array('login')))  }}
                            <h2 class="form-signin-heading">Please sign in to renew your membership</h2>

                            <div>
                                {{ Form::label('email', 'Email:') }}
                                {{ Form::text('email', null, ['class' => 'form-control']) }}
                            </div>

                            <div>
                                {{ Form::label('password', 'Password:') }}
                                {{ Form::password('password', ['class' => 'form-control']) }}
                            </div>

                            <button class="btn btn-primary" type="submit">Sign in</button>
                        {{ Form::close() }}

    </div> <!-- /container -->
@stop