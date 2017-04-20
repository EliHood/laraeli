<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>@yield('title')</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
		<meta name="csrf-token" content="<?php echo csrf_token() ?>">

		{!! Html::style( asset('css/reset.css')) !!}
		{!! Html::style( asset('css/animate.css')) !!}
		{!! Html::style( asset('css/main.css')) !!}


	</head>
	<body>
		<!-- NAV GOES HERE -->
		<div class="wrapper">
			<a href="#" class="nav-toggle-btn">
				<span class="eli-line"></span>
				<span class="eli-line"></span>
				<span class="eli-line"></span>
			</a>
			<nav>
				<ul class="menu">

				 @if(!Auth::check())
					<li><a href="/">Home</a></li>
					<li><a href="/register">Register</a></li>
					<li><a href="/login">Login</a></li>

     			@endif

                @if(Auth::check())
     
                      	 <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                        <li><a href="{{ route('logout')}}">Logout</a></li>

                @endif
				</ul>
			</nav>
			@yield('content')
			<footer class="eli-main">
				<span>&copy; Eli <?php echo date("Y"); ?> </span>
				<span class="social-i">
				
	            <a href="https://www.facebook.com/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
	            <a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	            <a href="https://github.com/"><i class="fa fa-github" aria-hidden="true"></i></a>
				</span>

			</footer>


		</div>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
			<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
			<script type="text/javascript" src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>
		
			{!! Html::script( asset('js/main.js')) !!}
			{!! Html::script( asset('js/app.js')) !!}

	</body>
</html>