@extends('...layouts.oneCol')


@section('content')

    {{ Form::open(['route' => 'reset'] )  }}

        <div>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email', null, ['class' => 'form-control']) }}
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
        {{ Form::hidden('token', $token , array('class' => 'form-control')) }}
        </div>

        <p></p>
        <div>
            {{ Form::submit('Reset Password', ['class' => 'btn btn-primary'] )}}
        </div>
    {{ Form::close() }}
@stop