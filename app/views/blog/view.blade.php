@extends('layout.main')
@section('content')

      @if($posts->count())
          @foreach($posts as $post)
          <div class ="container">
          <h2><a href="{{$post->id}}">{{$post->title}}</a></h2>
          <h5>{{$post->body}}</h5>
         </div>
    @endforeach
@endif

     

@stop