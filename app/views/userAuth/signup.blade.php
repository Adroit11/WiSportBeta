@extends('...layouts.default')


@section('content')

    <h1>Register as a New User</h1>

    {{ Form::open(['route' => 'signup'] )  }}

        <div>
            {{ Form::label('username', 'Username:') }}
            {{ Form::text('username', null, ['class' => 'form-control']) }}
        </div>


        <div>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('username', null, ['class' => 'form-control']) }}
        </div>

        <div>
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
        </div>


        <div>
            {{ Form::label('password_confirmation', 'Password Confirmation:') }}
            {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
        </div>

        <div>
            {{ Form::submit('Sign Up', ['class' => 'btn btn-primary'] )}}
        </div>
    {{ Form::close() }}
@stop