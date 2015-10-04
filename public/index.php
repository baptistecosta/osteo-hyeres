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

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick-theme.css"/>
	<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.4.1/slick.min.js"></script>


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
			<li><a href="#encart-a-propos" class="lead">A propos</a></li>
			<li><a href="#encart-l-osteopathie" class="lead">L'ostéopathie</a></li>
			<li><a href="#encart-le-cabinet" class="lead">Le cabinet</a></li>
			<li><a href="#encart-a-propos">A propos</a></li>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">L'ostéopathie <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
					<li><a href="#osteopathie-definition-et-principe"><strong>Définition et principes</strong></a></li>
					<li class="divider"></li>
					<li><a href="#osteopathie-deroulement-d-une-seance"><strong>Déroulement d'une séance</strong></a></li>
					<li class="divider"></li>
					<li><a href="#osteopathie-les-effets-de-la-seance"><strong>Les effets de la séances</strong></a></li>
					<li class="divider"></li>
					<li><a href="#osteopathie-suis-je-concerne"><strong>Suis-je concerné ?</strong></a></li>
					<li><a href="#osteopathie-suis-je-concerne-quand-consulter">Quand consulter ?</a></li>
					<li><a href="#osteopathie-suis-je-concerne-les-adultes">Les Adultes</a></li>
					<li><a href="#osteopathie-suis-je-concerne-les-femmes-enceintes">Les femmes enceintes</a></li>
					<li><a href="#osteopathie-suis-je-concerne-les-bebes-et-les-enfants">Les bébés et les enfants</a></li>
					<li><a href="#osteopathie-suis-je-concerne-les-sportifs">Les sportifs</a></li>
				</ul>
			</li>
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
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<img src="/img/consultation-0.jpg">
				<div class="carousel-caption">
					Caption
				</div>
			</div>
			<div class="item">
				<img src="/img/consultation-1.jpg">
				<div class="carousel-caption">
					Caption
				</div>
			</div>
			<div class="item">
				<img src="/img/consultation-2.jpg">
				<div class="carousel-caption">
					Caption
				</div>
			</div>
		</div>

		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Précédent</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Suivant</span>
		</a>
	</div>
	
	
	<div id="encart-a-propos" class="row row-padded">
		<div class="page-header">
			<h2>A propos</h2>
		</div>
		<p class="lead">
			Diplômé du Collège Ostéopathique de Provence à Marseille, j'ai suivie une formation de cinq années à temps
			complet. J'ai ainsi obtenue un diplôme Ostéopathique niveau RNCP1 (Répertoires National des Certifications
			Professionnelles), qui relève d'un haut niveau de certification.
		</p>
		<p class="lead">
			Lors de mon cursus, j'ai bien sur beaucoup étudié l'anatomie, mais aussi la biomécanique du corps,
			les pathologies médicales (cardiologie, gastro-entérologie, urologie, gynécologie ...).
			Ceci est très important car celà nous permet de déterminer si, lors de votre visite, vous êtes apte à
			recevoir une traitement ostéopathique.
		</p>
		<p class="lead">
			Nous faisons également beaucoup de pratique : en effet, l'école dispose d'une clinique interne au sein de
			laquelle nous recevons des patients externes, et nous avions de très nombreux stages (à l'hôpital de la
			Timone, à la clinique Saint Elisabeth, auprès des pompiers de Vitrolles ETC).
			Mais j'ai également fait de nombreux stages personnels, notament au sein du Théatre National de La Criée de
			Marseille et d'un club de squash.
		</p>
		<p class="lead">
			Aujourd'hui, je travaille dans mon propre cabinet, et j'intervient également une fois par semaine au Pôle
			France de Gymnastique de Marseille. Là bas je soigne de jeunes athlètes de haut niveau, ce qui m'apporte
			beaucoup sur le plan professionnel et humain, car ce sont des enfants fantastiques.
		</p>
		<p class="lead">
			Je continue toujours à apprendre, auprès de mes patients bien sûr, mais également en faisant des formations,
			ce qui me permet d'élargir mes connaissances, aussi bien sur le plan physique qu'émotionnel.
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

	<div id="encart-l-osteopathie" class="row row-padded">
		<div class="page-header">
			<h2>L'ostéopathie en quelques mots</h2>
		</div>

		<h3 id="osteopathie-definition-et-principe">Définition et principes</h3>
		<p class="lead">
			L'ostéopathie est une thérapie exclusivement manuelle. L'ostéopathe se sert de ses mains afin de déterminer
			et traiter les restrictions de mobilités pouvant altérer le bon fonctionnement du corps.
			C'est une thérapie globale, qui s'appuie sur une connaissance approfondie de l'anatomie ainsi que de la
			physiologie du corps humain et des interactions entre chacun de ses systèmes.
			Cette thérapie repose sur des principes origianux qui sont : Son outils : La main. La globalité de
			l'individu.
			L'équilibre tissulaire ("là ou les liquides circulent, la patholigie de s'installe pas" : Loi de L'artère).
			Donc, les restrictions de mobilités peuvent concerner différents "plans" anatomiques : les articulations,
			les organes, les tissus (muscles, fascias, ligaments).
			Une fois que l'ostéopathe aura déterminé ces restrictions de mobilités (que nous nommont : dysfonctions), il
			s'attardera à rééquilibrer les systèmes afin de restituer la mobilité perdue, de libérer les tissus, et de
			restaurer le principe d'auto-guérison.
			Pour se faire, il emploira différentes techniques : les techniques dites fonctionnelles (douces),
			musculaires, structurelles, mais aussi crâniennes et viscérales.
			Car ne l'oublions pas, l'ostéopathie est une thérapie manuelle Globale.
		</p>
		<p class="lead">
			L'approche qu'a l'ostéopathe permet d'agir de façon curative, et préventive. En effet, le corps subit au fil
			de notre vie des "agressions" (les chocs physques et emotionnels), qui laissent leurs empreintes,
			s'accumulent.
			Notre corps compense chaque fois un peu plus. A plus ou moins long termes, ce sont les consèquences de ces
			agressions que nous ressentons lorsqu'elles se manifestens par des douleurs.
			Bien sûr, l'ostéopathie de se substitue pas à la médecine traditionnelle. Elle est tout à fait en
			complémentarité de la médecine allopathique, ainsi que d'autre thérapie (kinésithérapie, orthophonie,
			podologie...)
		</p>

		<h3 id="osteopathie-deroulement-d-une-seance">Déroulement d'une séance</h3>
		<p class="lead">
			La consultation dure environ une heure. Elle se divise en plusieurs temps : le moment
			de l'interrogatoire : il va me permettre de vous connaitre vous et votre douleur, de cerner vos antécédants, de
			comprendre comment votre douleur a pu apparaitre.
			Le moments des tests : je vais m'attarder à tester les différentes structures de votre corps afin de détecter
			une éventuelle restriction de mobilité pouvant causer une gêne au bon équilibre de votre corps.
			Enfin, le traitement : après avoir déterminer les zones en souffrance, j'élabore un traitement visant à redonner
			de la mobilité, libérer les tissus et les fluides.
			En fonction de votre motifs de consultation, je vous donnerai des conseils à suivre après la séances pour éviter
			la nouvelle apparition de la douleur. Ces conseils sont basés sur vos habitudes de vie.
		</p>

		<h3 id="osteopathie-les-effets-de-la-seance">Les effets de la séances</h3>
		<p class="lead">
			Il arrive parfois que la douleur soit accentuée durant quelques heures : celà ne doit
			pas vous inquièter. En effet, vous étiez jusque la dans une position de déséquilibre. Le fait de rétablir la
			mobilité et de vous redonner un équilibre va chambouler beaucoup de choses. Il faut parfois un peu de patience.
			Vous pouvez vous sentir en pleine forme, ou alors totalement épuisé : la aussi, ce sont des effets normaux. Nous
			travaillons vos tissus en profondeur, et vous aurez besoin de beaucoup d'énergie pour retrouver votre équilibre.
		</p>

		<h3 id="osteopathie-suis-je-concerne">Suis-je concerné ?</h3>
		<h4 id="osteopathie-suis-je-concerne-quand-consulter">Quand consulter ?</h4>
		<p class="lead">
			On peut consulter un ostéopathe à tout âge. Tous le monde est concerné, les adultes, les
			enfants, les sportifs. L'idéal étant de consulter votre ostéopathe une à deux fois par an pour des visites de
			contrôle, et vérifier le bon équilibre de votre corps.
		</p>

		<h4 id="osteopathie-suis-je-concerne-les-adultes">Les Adultes</h4>
		<p class="lead">
			Vous pouvez consulter de façon préventive afin de maintenir le bon équilibre de votre corps. Nous
			avons tous notre propre équilibre, nous sommes tous différents, avec une histoire différentes. L'ostéopathe
			prend également en compte cet élément qui fera partie intégrante du traitement.
		</p>
		<h4 id="osteopathie-suis-je-concerne-les-femmes-enceintes">Les femmes enceintes</h4>
		<p class="lead">
			Une grossesse est merveilleux moment. Mais le corps d'une femme s'en retrouve également bouleversé : le
			bébé qui prend de la place, les hormones qui nous chamboule, les problèmes circulatoire, le stress de
			l'accouchement...
			L'ostéopathe pourra vous apporter ses bienfaits par des manipulations douces, en libérant les structures gênées
			par le bébé, en soulageant vos maux. L'ostéopathie est un moyen naturel et doux de vous apporter du mieux être,
			et permet également de préparer votre corps à l'accouchement.
			Il est important d'avoir un suivi post-partum, car l'accouchement, qu'il se fasse par voies basses ou par
			césarienne, reste un "traumatisme" pour notre corps.Il est important de libérer toute les tensions qui y sont
			liées, et qui, accompagné de la fatigue, peuvent aboutir à une douleur aigue.
			Le suivie ostéopathique peut également être interressant si vous avez des difficultées à la procréation. En
			effet, une restriction de la mobilité du bassin, des lombaires, des tensions du système viscéral et autres
			lésions ostéopathiques, peuvent gêner la naissance de ce petit bout de vie.
		</p>
		<h4 id="osteopathie-suis-je-concerne-les-bebes-et-les-enfants">Les bébés et les enfants</h4>
		<p class="lead">
			Il est vraiment important de faire suivre par un ostéopathe vos enfant, dès leur
			naissance. En effet, votre bébé peut subir des contraintes dès votre grossesse (choc emotionnel, stress,
			mauvaise position intra-utérine). Il faut savoir que lorsqu'il est dans votre ventre, votre petit bout ressent
			tout ce que vous ressentez, d'une façon aussi intense que vous.
			Ensuite, l'accouchement peut être un premier traumatisme : cordon autour du cou, utilisation d'instruments comme
			les forceps etc. Tout ceci peut avoir à plus ou moins long termes des répercussions sur le développement de
			votre bébé.
		</p>
		<p class="lead">
			Quand consulter pour votre bébé ? : Accouchement trop long ou trop court, péridural ou anesthésie autre,
			présentation par le siège, forte traction sur la tête, cordon enroulé autour du cou ou d'un bras, en cas de
			prématurité, sil'on a excercé une forte pression sur votre ventre, en cas d'utilisation de matériel (forceps,
			ventouse, spatules), en cas de cesarienne, de souffrance foetale ou de geste de réanimation.
			Certains signes pourront vous alerter : Bébé se cabre en arrière, il est crispé, il sursaute au moindre bruit,
			pleure tout le temps, il dors très peu, il régurgite, il a du mal à téter, ne la digère pas, il tourne toujours
			la tête du même côté, il a des troubles ORL à répétitions (otite, bronchites ...).
			Il est également important d'amener bébé chez l'ostéopathe en prévision ou suite à un vaccin ou à une piqure.
			Celà permet de le préparer à bien recevoir et à bien supporter le vaccin si vous venez avant, et à bien
			l'évacuer et à être sur qu'il le supportera bien si vous venez après. Quand aux piqures (y compris les vaccins),
			celà peut parfois léser les tissus environnants, et cela pourrait gêner votre bébé.
		</p>
		<p class="lead">
			Les enfants ont également un intéret tout particulier à consulter un ostéopathe : Nous pouvons suivre leur
			croissance, prévenir l'apparition d'une éventuelle scoliose ou d'un trouble postural.
			Il est important d'amener votre enfant voir un ostéopathe en cas d'évenements important pouvant avoir à plus ou
			moins long terme des séquelles sur son bon équilibre (chutes, coups, choc émotionnel, entorses). Gardez à
			l'esprit qu'à chaque agression, notre corps compense, et on adapte toujours un peu plus, pour finir par ne plus
			pouvoir...
		</p>
		<h4 id="osteopathie-suis-je-concerne-les-sportifs">Les sportifs</h4>
		<p class="lead">
			Le suivi des sportifs est également interressant. Le but étant de diminuer, comme pour tous, les
			restrictions de mobilités, mais également de favoriser au maximum leur bon équilibre afin d'améliorer leurs
			performances, et de les maintenir à un niveau élevé.
			Mon travail au sein du Pôle France de Gymnastique de Marseille me permet de mesurer les effets de l'ostéopathie
			sur le long terme, et d'observer notre actions sur des pathologies du sportif de haut niveau mineur comme la
			maladie de severe, les periostites, les epycondylite. Ce travail est d'autant plus interressant si il se fait en
			collaboration avec des kinés, comme c'est la cas à Marseille.
			Car dans nos domaines de compétence, nous trouvons une grande complémentarité.
		</p>
		<p>
			Back to <a href="../sticky-footer">the default sticky footer</a> minus the navbar.
		</p>
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

</div>
</body>
</html>