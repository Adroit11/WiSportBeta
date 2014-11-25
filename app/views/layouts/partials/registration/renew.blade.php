
{{ Form::model($userData[0], array('route' => array('renew', $userData[0]->id)))  }}

    <div>
        {{ Form::label('first_name', 'First Name:') }}
        {{ Form::text('first_name', null, ['class' => 'form-control', 'length' => '40']) }}
    </div>

    <div>
        {{ Form::label('last_name', 'Last Name:') }}
        {{ Form::text('last_name', null, ['class' => 'form-control', 'length' => '80']) }}
    </div>

    <div>
        {{ Form::label('email', 'Email:') }}
        {{ Form::text('email', null, ['class' => 'form-control']) }}
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