@extends('layout.main')

@section('content')
@if(Auth::check())
<p>Hello,{{Auth::user()->username}}!</p>
@else
<!--HTML::image('img/slider-biz1.jpg'') -->
<img class="img-responsive" src="img/slider-biz1.jpg" alt="">
<div class="container">
 <p></p>
           <p style="text-align:justify;">
            Article<br>
            @if($posts->count())
          @foreach($posts as $post)
          <h2>{{$post->title}}</h2>
          <h5>{{$post->body}}</h5>
    @endforeach
@endif

  
</p>
</div>

@endif
@stop
