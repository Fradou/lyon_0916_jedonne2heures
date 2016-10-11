<!DOCTYPE html>
<html>

<head>
	<?php include_once '../src/inc/links.php';	?>
	<title>Je propose</title>
</head>
<body>

<?php include_once '../src/inc/header.php'; ?>

	<div class="container-fluid">

		<div class="row all_blsp_xs"></div>

		<div class="row">
			<div class="how_bloctxt_int col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6" id="howp_bltxt"> 
				<h1>Je propose un projet</h1>

				<p>Vous êtes porteur d'un projet ? Vous êtes Entrepreneur et vous venez de démarrer ? Vous voulez faire grandir votre entreprise ? Vous avez des envies, des idées, des rêves et des besoins mais pas encore tous les moyens. <span>Je Donne 2 Heures</span> est fait pour Vous ! Grâce à notre plateforme, le monde entier est là pour vous apporter son soutien. Soyez les premiers à être tenu au courant du lancement de notre plateforme et donner vie à vos plus beaux projets.
				</p>
			</div>
		</div>

		<div class="how_btn_inscript">
			<a href="#inscriptb" class="btn btn-default">Je sais déjà comment ça marche, je m'inscris !</a>
			<p small class="text-muted">Je ne sais pas comment ça marche, je continue de lire.</p>
		</div>

		<div class="row all_blsp_sm"></div>

		<div class="row how_blocimg_ext">
			<div class="how_blocimg_int col-xs-offset-0 col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
				<img class="how_blocimg_img" alt="Je propose un projet" src="../public/img/jepropose.jpg">
			</div>
		</div>

		<div class="row all_blsp_sm"></div>

		<div class="row how_bloctxt_ext">
			<div class="how_bloctxt_int col-xs-offset-0 col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6" id="howp_bltxt">
				<h2> Entrepreneurs<br>
					<small class="text-muted">Je Donne 2 Heures, comment ça va marcher ?</small></h2>
				<p>
					<ul>
						<li>L'inscription sur <span>Je Donne 2 Heures</span> est gratuite.</li><br>
						<li>Vous accédez dés votre arrivée à un espace personnel dédié afin de présenter librement votre projet ou votre entreprise (vidéo, photos et textes).</li></br>
						<li>Cet espace vous sert également à proposer vos projets et donc à solliciter l'aide du grand public.<br><span>Je Donne 2 Heures</span> vous offre votre premier projet. Par la suite différentes formules payantes vous serons proposées.</li></br>
						<li>Grâce à un processus de matching sécurisé, <span>Je Donne 2 Heures</span> vous met en relation avec les personnes qui désirent vous offrir de leur temps libre pour faire aboutir vos projets.</li></br>
					</ul>
				</p>
			</div>
		</div>

		<div class="row all_blsp">Transrow</div>

		<div class="row how_form_ext">
			<div class="how_form_int col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6" id="howb_form"><a name="inscriptb"></a>
			</div>
			<div class="how_form_int col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
				<?php include_once 'inc/formprojets.php'; ?>
			</div>
		</div>


		<div class="row all_blsp"></div>

	</div>

<?php
include_once 'inc/footer.php';
?>

</body>

</html>
