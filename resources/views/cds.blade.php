@extends('layouts.app')

@section('main')
<div class="container">
	<div class="cds-container">
		@foreach ($cds as $album)
		<div class="cd">
			<img src="{{$album['cover']}}" />
			<h3>{{$album['album']}}</h3>
			<small>{{$album['artist']}}</small>
			<strong>{{$album['year']}}</strong>
		</div>
		@endforeach
	</div>
</div>
@endsection