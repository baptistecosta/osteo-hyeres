<!DOCTYPE html>
<html>
<head>
	<title>Ostéopathe Hyères</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/bootstrap-glyphicons.css">
<!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">-->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto" type="text/css">
	<link rel="stylesheet" href="/css/style.css">

	<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script type="application/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
	<script type="application/javascript">
		function initialize() {
			var position = new google.maps.LatLng(43.126430, 6.093657);

			var map = new google.maps.Map(document.getElementById('map-canvas'), {
				center: position,
				zoom: 13,
				scrollwheel: false
			});

			var marker = new google.maps.Marker({
				position: position,
				map: map,
				title: "Mon cabinet"
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);

		$(document).ready(function() {
			var index = 0;
			var elements = $('img[id^="img-consultation-"]');

			function photoSuivanteDeConsultation() {
				elements.each(function(i) {
					if (i === index % elements.length) {
						$(this).show();
					} else {
						$(this).hide();
					}
				});
				index++;

				window.setTimeout(function() {
					photoSuivanteDeConsultation()
				}, 6000);
			}

			photoSuivanteDeConsultation()
		});

	</script>

</head>
<body>
<nav class="navbar navbar-default">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="#">
			<h1>
				PAULINE TURREL<br>
				Ostéopathe à Hyères
			</h1>
		</a>
	</div>
	<div id="navbar" class="collapse navbar-collapse">
		<ul class="nav navbar-nav">
			<li><a href="#encart-a-propos">A propos</a></li>
			<li><a href="#encart-l-osteopathie">L'ostéopathie</a></li>
			<li><a href="#encart-le-cabinet">Le cabinet</a></li>
		</ul>
		<ul class="nav navbar-nav pull-right">
			<li>
				<a href="#contact">
					<span class="glyphicon glyphicon-earphone"></span>&nbsp;<span id="navbar-telephone">01 02 03 04 05</span>
				</a>
			</li>
		</ul>
	</div>
</nav>
<div class="container">
	<div class="image">
		<img id="img-consultation-0" src="/img/consultation-0.jpg" class="ri">
		<img id="img-consultation-1" src="/img/consultation-1.jpg" class="ri">
		<img id="img-consultation-2" src="/img/consultation-2.jpg" class="ri">
	</div>

	<div id="encart-a-propos" class="row row-padded">
		<div class="page-header">
			<h2>A propos</h2>
		</div>
		<p class="lead">
			Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
			dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
			ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
			fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
			deserunt mollit anim id est laborum.
		</p>
	</div>


	<div id="encart-l-osteopathie" class="row row-padded">
		<div class="page-header">
			<h2>L'ostéopathie en quelques mots</h2>
		</div>
		<p class="lead">
			L'ostéopathie est une approche thérapeutique non conventionnelle (médecine parallèle) qui repose sur l'idée
			que des manipulations manuelles du système musculo-squelettique et myofascial permettent de soulager
			certains troubles fonctionnels.
		</p>
		<p class="lead">
			En France, le titre professionnel d'ostéopathe est reconnu, de même que celui de chiropracteur, par la loi
			du 4 mars 20021. L'usage de ce titre n'est toutefois pas réservé aux personnes exerçant la profession
			d'ostéopathe à titre exclusif mais est également ouvert aux personnels de santé remplissant les conditions
			ainsi qu'il a été confirmé par le Conseil d'État. Les décrets d'application relatifs aux conditions
			d'exercice de la profession sont toutefois distincts pour ces deux professions qui, par conséquent,
			n'obéissent pas aux mêmes règles.
		</p>
		<p>
			Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.
		</p>
	</div>

	<div id="encart-l-osteopathie-en-images" class="row row-padded">
		<div class="col-lg-4 text-center">
			<img class="img-circle" src="/img/l-osteopathie-1.jpg" alt=""/>
			<p class="lead">Lorem Ipsum, Lorem Ipsum</p>
		</div>
		<div class="col-lg-4 text-center">
			<img class="img-circle" src="/img/l-osteopathie-1.jpg" alt=""/>
			<p class="lead">Lorem Ipsum, Lorem Ipsum</p>
		</div>
		<div class="col-lg-4 text-center">
			<img class="img-circle" src="/img/l-osteopathie-1.jpg" alt=""/>
			<p class="lead">Lorem Ipsum, Lorem Ipsum</p>
		</div>
	</div>

	<img class="img-responsive" src="/img/consultation-2.jpg" alt="Manipulation bébé"/>

	<div id="encart-le-cabinet">
		<div class="page-header">
			<h2>Le cabinet</h2>
		</div>
		<h3>Adresse</h3>
		<p class="lead">
			Pôle d'Activité Hyèrois<br>
			1128 route de Toulon<br>
			83400 Hyères<br>
		</p>
		<h3>
			Contact
		</h3>
		<p class="lead">
			<span class="glyphicon glyphicon-earphone"></span> 01 02 03 04 05<br>
			<span class="glyphicon glyphicon-envelope"></span> osteo-hyeres@gmail.com
		</p>
		<p class="lead">
			- Grand parking sécurisé -<br>
			- Accès simple et rapide en sortie d'autoroute -<br>
			- Batiment construit selon les nouvelles normes -
		</p>
	</div>

	<div id="map-canvas"></div>

	<img class="img-responsive" src="/img/pole.jpg" alt="Ostéopathe Hyères - Manipulation dorsale"/>
</div>
</body>
</html>