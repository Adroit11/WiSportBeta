@extends('...layouts.oneCol')


@section('content')

<div class="col-lg-12">
 <hr>
 <h3>{{ $post->title }}</h3>
 <p class="lead">BY {{ ucwords($post->user->username)}}</p>
 <hr>
 <p><span class="glyphicon glyphicon-time"></span> Posted {{ $date }}</p>
 <hr>
 <p class="lead">{{ $post->body}}</p>
 <hr>
 {{ HTML::link('/', 'Go Back')}}

    
</div>




@stop