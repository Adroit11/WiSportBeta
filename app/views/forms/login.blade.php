@extends('layouts.master')

@section('content')

<h1>Login</h1>

{{Form::open(['url' => '/login'])}}

    <div>
        {{Form::label('title', 'Username')}}
        {{Form::text('username')}}
    </div>

    <div>
        {{Form::label('title', 'Password')}}
        {{Form::password('password')}}
    </div>

    <div>
        {{Form::submit('Login')}}
    </div>

{{Form::close()}}