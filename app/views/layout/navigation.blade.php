<html>
<head>
<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('js/bootstrap.js') }}" type="text/javascript">
<link href="{{ URL::asset('js/bootstrap.min.js') }}" type="text/javascript">
<link href="{{ URL::asset('js/jquery-1.9.0.min.js') }}" type="text/javascript">
</head>
<body>

 <div class="navbar navbar-inverse navbar static-top" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" target="_blank"><span class="fa fa-home"></span> theInstitute</a>
        </div>
        <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1" >
          <ul class="nav navbar-nav">


<li><a href="{{URL::route('home')}}">Home</a></li>

<li><a href="http://facebook.com/ranjit.karki.140">Find Me</a></li>
@if(Auth::check())

<li><a href="{{URL::route('our-members')}}">Our Members</a></li>
<li><a href="{{URL::route('account-sign-out')}}">Sign out</a></li>
<li><a href="{{URL::route('account-change-password')}}">Change password</a></li>

<li><a href="{{URL::route('add-members-post')}}">Add Post</a></li>

@else

<li><a href="{{URL::route('blog-view')}}">Blog</a></li>
<li><a href="{{URL::route('account-sign-in')}}">Sign In</a></li>
<li><a href="{{URL::route('account-create')}}">Create an Account</a></li>
@endif


           
           <!--Drop down starts-->
            <li class="dropdown">
              <a data-toggle="dropdown" class="dropdown-toggle" href="#">More<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">Demos</a></li>
                <li><a href="#">Projects</a></li>
              </ul>
              
              
            </li>

        
          <!--Drop down ends here-->

          </ul>
        </div>
      </div>
    </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<strong>Follow me for updates</strong>
    <div class="container mainbody">
<iframe src="//www.facebook.com/plugins/follow?href=https%3A%2F%2Fwww.facebook.com%2Franjit.karki.140&amp;layout=standard&amp;show_faces=true&amp;colorscheme=light&amp;width=450&amp;height=80" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:80px;" allowTransparency="true"></iframe>
  
      </div>
      <div class="clearfix"></div>




</body>
</html>



