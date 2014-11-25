@extends('...layouts.oneCol')

@section('content')
<h1>WiSport News - Search Results</h1>
@if($results->count())
<div class="row">
	@foreach($results as $r)
	<div class="col-lg-8">
		<h2>{{ HTML::link('blog/'.$r->slug, $r->title) }}</h2>
		<p class="lead">by {{ ucwords($r->user->username)}}</p>
		<p><span class="glyphicon glyphicon-time"></span> Posted {{ date_format($r->created_at, 'l, F j, Y')}}</p>
		<p>{{ Str::limit($r->body, 120)}}{{HTML::link('blog/'.$r->slug, 'Read More')}}</p>
		<hr><br>
	</div>
	@endforeach

@else
    <hr/>
	<h4>I'm sorry your search returned no results</h4>
@endif

</div>
<div class="row">

<div class="col-lg-8 btn">
        <a href="{{ URL::to('/blogs') }}" class="btn btn-primary">
            Back to News
        </a>
    </div>
</div>
@stop