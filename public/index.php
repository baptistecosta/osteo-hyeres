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
				zoom: 12,
				scrollwheel: false
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
			<a class="navbar-brand" href="#">Pauline Turrel - Ostéopathe D.O.</a>
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
	</div>
</nav>
<div class="container">
	<div id="main-panel-wrapper">
		<img id="main-panel-img" class="img-responsive" src="/img/header-large-2.jpg" alt="Ostéopathe Hyères - Manipulation dorsale"/>
		<div id="main-panel-text">
			<h1>Pauline Turrel<br>Ostéopathe D.O.</h1>
		</div>
	</div>
	<div class="row row-padded">
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
	<img class="img-responsive" src="/img/baby-large.jpg" alt="Manipulation bébé"/>
	<div class="panel-adresse-wrapper">
		<div class="panel-adresse">
			<h2>Adresse</h2>
			<p class="lead">
				Pôle d'Activité Hyèrois<br>
				1128 route de Toulon<br>
				83400 Hyères<br>
				01 02 03 04 05
			</p>
		</div>
	</div>
	<div id="map-canvas"></div>
	<div class="panel-adresse-wrapper">
		<div class="panel-adresse">
			<h2>Pôle d'activités Hyèrois</h2>
			<p class="lead">
				A Hyères dans le Var. Espace neuf et sécurisé de 1700 m² sur 3 niveaux avec parking privé.<br>
				Surfaces modulables à partir de 60 m² et jusqu'à 600 m² sur un même niveau.<br>
				Prestations modernes et à la carte.<br><br>
				- Concept dynamique -<br>
				- Grand parking sécurisé -<br>
				- Accès simple et rapide en sortie d'autoroute -<br>
				- Batiment construit selon les nouvelles normes -
			</p>
		</div>
	</div>
	<img class="img-responsive" src="/img/pole.jpg" alt="Ostéopathe Hyères - Manipulation dorsale"/>
</div>
</body>
</html>