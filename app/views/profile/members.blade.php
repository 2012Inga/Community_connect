@extends('layout.main')
@section('content')

<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet"
our members<br>
 @foreach ($users as $user)
                <tr>
                    <td>{{ $user->username }}</td>
                   
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                    <td><br>
                    		<br>
                        
                @endforeach

@stop