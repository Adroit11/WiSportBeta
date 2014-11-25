{{ Form::open(['route' => 'signup'] )  }}

    <div>
        {{ Form::label('username', 'Username:') }}
        {{ Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'Username', 'length' => '40']) }}
    </div>

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
        {{ Form::label('first_name', 'First Name:') }}
        {{ Form::text('first_name', null, ['class' => 'form-control', 'length' => '40']) }}
    </div>

    <div>
        {{ Form::label('last_name', 'Last Name:') }}
        {{ Form::text('last_name', null, ['class' => 'form-control', 'length' => '80']) }}
    </div>

    <div>
        {{ Form::label('gender', 'Gender:') }}<br>
        {{ Form::label('male', 'Male', null); }}
        {{ Form::radio('gender', 'M', null); }}
        {{ Form::label('female', 'Female', null); }}
        {{ Form::radio('gender', 'F', null); }}<br>
    </div>

    <div>
        {{ Form::label('date_of_birth', 'Birthday:') }}
        {{ Form::text('date_of_birth', '', array('class' => 'form-control datepicker','id' => 'datepicker')) }}
    </div>

    <div>
        {{ Form::label('phone', 'Primary Phone Number:') }}
        {{ Form::text('phone', null, ['class' => 'form-control', 'length' => '80']) }}
    </div>

    <div>
        {{ Form::label('team', 'Team') }}<br>
        {{ Form::select('team', $teams)}}
    </div>
    <p></p>
    <div>
        {{ Form::submit('Sign Up & Pay', ['class' => 'btn btn-primary'] )}}
    </div>
{{ Form::close() }}