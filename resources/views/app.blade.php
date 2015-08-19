<!DOCTYPE html>
<html>

<head>
	<title></title>

	<!--CSS-->
	<link rel="stylesheet" type="text/css" href="/css/style.css">

	<!--Font-->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


</head>

<body>
	<header>
		<nav>
			<ul>
				<li><a href="/">Home</a></li>
				<li><a href="/articles">Archive</a></li>
				<li><a href="/about">About</a></li>
				<li class="special-nav-item"><a href="/minimalism">Minimalism</a></li>
			</ul>
		</nav>
	</header>

	<div class="wrapper">

		@yield('content')


		<div class="push"></div>
	</div>

		@yield('footer')

	<footer>
		<p class="footer-text">&copy; Website by: <a href="http://vonmedia.net" target="_blank">Sumit Bhaintwal</a></p>
	</footer>
</body>

</html>
