@extends('layout.main')
@section('content')

<link rel="stylesheet" type="text/css" href="URL::asses('css/bootstrap.min.css')">
<div class="container" style="padding-left: 0px; padding-right: 15px;">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Change Your Password Here!</h3>
    </div>&nbsp;
<form action="{{URL::route('account-change-password-post')}}" method="post">
<div class="form-group">
<label class="col-lg-2 control-label" for="">Your Old Password: </label>
<div class="col-lg-6">
<input type="text"class="form-control" name="old_password">
@if($errors->has('old_password'))
{{$errors->first('old_password')}}
@endif
</div>
</div>
<div class="clearfix" style="height: 10px;clear: both;"></div>

<div class="form-group">
<label class="col-lg-2 control-label" for="">Your New Password: </label>
<div class="col-lg-6">
<input type="text"class="form-control" name="password">
@if($errors->has('password'))
{{$errors->first('password')}}
@endif
</div></div>
<div class="clearfix"style="height:10px;clear:both;"></div>

<div class="form-group">
<label class="col-lg-2 control-label" for="uemail">Your New Password Again: </label>
<div class="col-lg-6">
<input type="text"class="form-control" name="password_again">
@if($errors->has('password_again'))
{{$errors->first('password_again')}}
@endif
</div>
</div>
<div class="clearfix"style="height:10px;clear:both;"></div>
<div class="form-group">
 <div class="col-lg-10 col-lg-offset-2">
<input type="submit" class="btn btn-success" value="change password">
</div>
</div>


{{Form::token()}}
</form>
&nbsp;
@stop