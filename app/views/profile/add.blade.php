@extends('layout.main')
@section('content')

<form action="{{URL::route('add-members-post')}}" method="post">


@if(Session::has('message'))

<div class="alert alert-success" style="width:400px;margin-left:260px;">
<a href="#" class="close" data-dismiss="alert">&times;</a>
	{{Session::get('message')}} 

	 </div> </div>
@endif

<div class="form-group">
<label class="col-lg-2 control-label" for="">Your Title: </label>
<div class="col-lg-6">
<input type="text"class="form-control" name="name">
 
</div>
</div>
<div class="clearfix" style="height: 10px;clear: both;"></div>


<div class="form-group">
<label class="col-lg-2 control-label" for="">Your Content: </label>
<div class="col-lg-6">
<input type="text"class="form-control" name="bio">

</div>
</div>
<div class="clearfix" style="height: 10px;clear: both;"></div>
 

<div class="form-group">
 <div class="col-lg-10 col-lg-offset-2"> 
<input type="submit"class="btn btn-primary" value="Add">
</div>
</div>


{{Form::token()}}

</form>&nbsp;



@stop
