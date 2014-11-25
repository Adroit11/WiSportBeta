
<div class="container">
    <div>
    @if(Session::has('message'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('message') }}
            {{ HTML::linkAction('RemindersController@getRemind', 'Click Here ')}} to reset your password.
        </div>
    @endif

    </div>
    {{ Form::open(array('route' => 'login')) }}
        <h2 class="form-signin-heading">Please Sign In</h2>

        <div>
            {{ Form::label('email', 'Email:') }}
            {{ Form::text('email', null, ['class' => 'form-control']) }}
        </div>

        <div>
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
        </div>
        <br/>

        <button class="btn btn-primary" type="submit">Sign in</button>
    {{ Form::close() }}
    <h4>{{ HTML::linkAction('RemindersController@getRemind', 'Click Here ')}} to reset your password.</h4>

</div>
