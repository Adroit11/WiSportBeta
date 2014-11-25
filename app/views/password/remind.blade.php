@extends('...layouts.oneCol')


@section('content')
<div>
    @if(Session::has('message'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('message') }}
        </div>
    @elseif(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
    @endif

    </div>
{{ Form::open(array('route' => 'remind')) }}
        <h2 class="form-signin-heading">Please Enter Your Email</h2>

        <div>
            {{ Form::text('email', null, ['class' => 'form-control']) }}
        </div>


        <button class="btn btn-primary" type="submit">Sign in</button>
    {{ Form::close() }}
@stop