@extends('...layouts.oneCol')

@section('content')
<div class="row">
    <div class="col-lg-8">
    <h1>WiSport News</h1>
    </div>

    <div class="col-lg-4">
    @include('layouts.partials.sidebar')
    </div>
</div>
<div class="row">
<div class="col-lg-8">
@foreach($posts as $p)

        <h2>{{ HTML::link('blog/'.$p->slug, $p->title) }}</h2>
        <p class="lead">by {{ ucwords( $p->user->username ) }}</p>
        <p><span class="glyphicon glyphicon-time"></span> Posted {{ date_format($p->created_at, 'l, F j, Y')}}</p>
        <p>{{ Str::limit($p->body, 120)}}{{HTML::link('blog/'.$p->slug, 'Read More')}}</p>
<hr>


@endforeach
{{ $posts->links() }}
</div>

 </div>
 </div>
@stop