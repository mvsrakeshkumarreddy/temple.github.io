<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="shopping" content="mvs rakesh kumar shopping site">
	<title>LOGIN PAGE</title>
	<link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<link href="css/app1.css" rel="stylesheet">
         <link rel="stylesheet" href="css/wow.animate.css">

</head>


<body>
<div class="wow bounceInLeft">
<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav nav-pills">

					 <li class="nav nav-pills"><a href="/"><i style="color: orange;font-size: 20px; font-family: cursive; ">HOME</i></a></li>
                    <li class="nav nav-pills"><a href="/announcements"><i style="color: orange;font-size: 20px; font-family: cursive;">ANNOUNCEMENTS</i></a></li>
                    <li class="nav nav-pills"><a href="/gallery"><i style="color: orange;font-size: 20px; font-family: cursive;">GALLERY</i></a></li>
                    <li class="nav nav-pills"><a href="/about"><i style="color: orange;font-size: 20px; font-family: cursive;">ABOUT</i></a></li>
                    <li class="nav nav-pills"><a href="/contact"><i style="color: orange;font-size: 20px; font-family: cursive;">CONTACT</i></a></li>
                    <li class="nav nav-pills"><a href="/map"><i style="color: orange;font-size: 20px; font-family: cursive;">MAP</i></a></li>




	@if(\Auth::check())
	<li class="nav nav-pills navbar-right">
		{{link_to_route('logout','LOGOUT')}}
	</li>
		@else
	<li class="nav nav-pills navbar-right">
 		{{link_to_route('login','LOGIN')}}
	</li>
	<li class="nav nav-pills navbar-right">
		{{link_to_route('users.create','REGISTER')}}
	</li>
	
	@endif
</ul>
</div>
		</div>
	</nav>
</div>
<div class="wow bounceInDown">
	@yield('content')
</div>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>
              <script>
              new WOW().init();
              </script>

</body>


</html>