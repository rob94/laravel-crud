@extends('layout')

@section('content')
<ul>
	@foreach($posts as $post)
	<li>
	<a href="posts/{{$post->id}}">{{ $post->title }}</a>
	</li>
	@endforeach
</ul>
<a href="posts/create">Agregar</a>
@stop