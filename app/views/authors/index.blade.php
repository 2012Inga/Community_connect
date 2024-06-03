@layout('layouts.default')
@section('content')
@foreach($authors as $author)
<li> {{$author->name}}</li>
@endforeach
@endsection