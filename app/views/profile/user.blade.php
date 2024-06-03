@extends('layout.main')
@section('content')
 Profile of<strong>
 {{$user->username}}
</strong>
<br>Member On:
{{$user->created_at}}
@stop