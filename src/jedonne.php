<!DOCTYPE html>
<html>

<head>
	<?php include_once '../src/inc/links.php';	?>
	<title>Je donne</title>
</head>
<body>

<?php include_once '../src/inc/header.php'; ?>

	<div class="container-fluid">

		<div class="row all_blsp_xs all_blsp_sm all_blsp_md"></div>

		<div class="row">
			<div class="how_bloctxt_int col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8" id="howp_bltxt">
				<h1>Je donne du temps</h1>

				<p>Étudiants, Salariés, Entre deux jobs, Indépendants ou Retraités vous êtes convaincus que l'Entrepreneuriat est le moteur de l'Économie de demain. Vous voulez donner du sens à votre temps libre et accompagner les Entrepreneurs pour faire naître ou grandir leurs plus belles idées et leurs plus beaux projets. Sur <span>Je Donne 2 Heures</span>, le temps c'est de l'argent alors n'investissez pas, investissez-vous!
				</p>
			</div>
		</div>

		<div class="how_btn_inscript">
			<a href="#inscriptp" class="btn btn-default how_btn_transon">Je sais déjà comment ça marche, je m'inscris!</a>
			<p class="text-muted">Je ne sais pas comment ça marche, je continue de lire.</p>
		</div>

		<div class="row all_blsp_sm"></div>

		<div class="row how_blocimg_ext">
			<div class="how_blocimg_int col-xs-offset-0 col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
				<img class="how_blocimg_img" alt="Je donne du temps" src="../public/img/Photo%20d'ambiance%20Offr'Heures2.jpg">
			</div>
		</div>	

		<div class="row all_blsp_sm"></div>

		<div class="row how_bloctxt_ext">
			<div class="how_bloctxt_int col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8" id="howp_bltxt">
				<h2>Offrir de votre temps libre<br>
					<small class="text-muted">Je Donne 2 Heures, comment ça va marcher ?</small></h2>
				<p>
					<ul>
						<li> L'inscription sur <span>Je Donne 2 Heures</span> est gratuite. Vous accédez dès votre arrivée à un espace personnel dédié, afin de vous présenter librement (vidéo, photos et textes).Vous décrivez vos compétences de façon déclarative, pas de dépôt de CV, pas de références nécessaires, c'est vous qui décidez.</li><br>
						<li>Vos informations sont confidentielles, elles sont invisibles pour les visiteurs du site et ne sont dévoilées aux Entrepreneurs qu'avec votre accord lors d'un processus de matching sécurisé.</li><br>
						<li>Sur <span>Je Donne 2 Heures</span> tout est gratuit pour ceux qui désirent offrir leur temps libre. Aucun frais caché ou supplémentaire ne vous sera jamais demandé. Vous donnez du temps pas de l'argent.</li><br>
						<li><span>Je Donne 2 Heures</span> est une plateforme de mise en relation entre entrepreneurs, ou porteurs de projets et toute personne désirant offrir de son temps libre.</li>
					</ul>
				</p>
			</div>
		</div>

		<div class="row all_blsp_xs how_btn_transoff"></div>

		<div class="row how_form_ext">
			<div class="how_form_int col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6"><a name="inscriptp"></a>
			</div>
			<div class="how_form_int col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6" id="howp_form">
				<h3>Inscrivez-vous !<br>
					<small class="text-muted">Vous êtes intéressé pour donner du temps ?<br>
					Vous souhaitez vous tenir informé du lancement de <span>Je Donne 2 Heures</span> ?
					</small>
				</h3>
			</div>
			<div class="how_form_int col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
				<?php include_once 'inc/formdonneurs.php'; ?>
			</div>
		</div>

		<div class="row all_blsp"></div>

	</div>

<?php
include_once 'inc/footer.php';
?>

</body>

</html>