<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title> Solutions Tag - Better Tomorrow</title>

	<!-- Main -->
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('slick/slick.css') }}" rel="stylesheet">
	<link href="{{ asset('slick/slick-theme.css') }}" rel="stylesheet">
	<!--<link href="{{ asset('font/stylesheet.css') }}" rel="stylesheet">-->


	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,700&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://res.cloudinary.com/veseylab/raw/upload/v1597754760/magicmouse/magic-mouse-1.0.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />



	<!-- CDNs -->
	{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	@yield('styles_login_register')
</head>
<body>

	<section id="app" >

		<header class="main-header bg-white">

			<div class="header container-fluid">
				<div class="header-inner-container">
					<nav class="main-nav-nav row">
						<div class="col-lg-2 col-6">
							<div class="logo-container">
								@include('includes.logo')
							</div>
						</div>
						<div class="col-lg-7 mobi-menu">
							<nav class="menu-navigation">
								<ul class="web-menu">
									@include('includes.menu')
								</ul>
							</nav>
						</div>
						<div class="col-lg-3 col-6">
							<ul class="menu-right">
								@include('includes.rightItems')
							</ul>
						</div>
				</div>
			</div>

		</header>


		<main class="stag_main">
			@yield('content')
		</main>

		@include('includes.footer')

	</section>

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> --}}
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

	<script type="text/javascript" src="https://res.cloudinary.com/veseylab/raw/upload/v1597754761/magicmouse/magic_mouse-1.0.js"></script>
	<script src="{{ asset('js/app.js') }}" defer></script>
	<script src="{{ asset('js/main.js') }}" defer></script>
	<script src="{{ asset('js/custom-js.js') }}" defer></script>
	<script src="{{ asset('slick/slick.min.js') }}" defer></script>

	<script type="text/javascript">
		options = {
		"cursorOuter": "circle-basic",
		"hoverEffect": "circle-move",
		"hoverItemMove": false,
		"defaultCursor": false,
		"outerWidth": 30,
		"outerHeight": 30
		};
		magicMouse(options);
	</script>

</body>
</html>
