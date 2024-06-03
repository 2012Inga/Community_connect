@extends('layout.main')
@section('content')

@foreach($posts as $post)
{{$post->name}}
{{$post->bio}}
@endforeach
@stop