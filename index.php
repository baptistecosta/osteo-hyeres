<!DOCTYPE html>
<html>
<head>
	<title>Ostéopathe Hyères</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">-->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto" type="text/css">

	<style type="text/css">
		html, body, #map-canvas {
			width: 100%;
			height: 500px;
			margin: 0;
			padding: 0;
		}

		* {
			font-family: 'Roboto', sans-serif !important;
		}

		body > .container {
			width: 100%;
			padding: 50px 0 0 0;
		}

		.row-padded {
			margin: 0 0;
			padding: 0 15px;
		}

	</style>

	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
	<script type="application/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
	<script type="application/javascript">
		function initialize() {
			var position = new google.maps.LatLng(43.126430, 6.093657);

			var map = new google.maps.Map(document.getElementById('map-canvas'), {
				center: position,
				zoom: 12
			});

			var marker = new google.maps.Marker({
				position: position,
				map: map,
				title: "Mon cabinet"
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);
	</script>

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Ostéopathe Hyères</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#contact">Contact</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
						<span class="caret"></span></a>
					<ul class="dropdown-menu" role="menu">
						<li><a href="#">Action</a></li>
						<li><a href="#">Another action</a></li>
						<li><a href="#">Something else here</a></li>
						<li class="divider"></li>
						<li class="dropdown-header">Nav header</li>
						<li><a href="#">Separated link</a></li>
						<li><a href="#">One more separated link</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!--/.nav-collapse -->
	</div>
</nav>
<div class="container">
	<div class="row row-padded">
		<div class="page-header">
			<h1>Sticky footer with fixed navbar</h1>
		</div>
		<p class="lead">Pin a fixed-height footer to the bottom of the viewport in desktop browsers with this custom HTML
			and CSS. A fixed navbar has been added with <code>padding-top: 60px;</code> on the <code>body &gt; .container</code>.</p>
		<p>Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.</p>
	</div>
	<div id="map-canvas"></div>
</div>

</body>
</html>