@extends('layout.main')

@section('content')
<link rel="stylesheet" type="text/css" href="URL::asses('css/bootstrap.min.css')">
<div class="container" style="padding-left: 0px; padding-right: 15px;">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Sign in!</h3>
    </div>
    <div class="page-header">
        <h6>&nbsp;if you have just made your account then please  first activate your accout through your email address,by clicking link that we have send in your email address. </h6>
      </div>

<form action="{{URL::route('account-sign-in-post')}}" method="post">

<div class="form-group">
<label class="col-lg-2 control-label" for="">Your Email: </label>
<div class="col-lg-6">
<input type="text"class="form-control" name="email"{{(Input::old('email')) ?'value="'.e(Input::old('email')).'"':''}}>
  @if($errors->has('email'))
  {{$errors->first('email')}}
  @endif
</div>
</div>
<div class="clearfix" style="height: 10px;clear: both;"></div>


<div class="form-group">
<label class="col-lg-2 control-label" for="">Your Password: </label>
<div class="col-lg-6">
<input type="text"class="form-control" name="password">
@if($errors->has('password'))
{{$errors->first('password')}}
@endif
</div>
</div>
<div class="clearfix" style="height: 10px;clear: both;"></div>
 
<div class="form-group">
&nbsp;<input type="checkbox"name="remember"id="remember">
<label for="remember">
Remember me
</label>
</div>

<div class="form-group">
 <div class="col-lg-10 col-lg-offset-2"> 
<input type="submit"class="btn btn-primary" value="Sign In">
</div>
</div>

{{Form::token()}}
</form>&nbsp;


@stop