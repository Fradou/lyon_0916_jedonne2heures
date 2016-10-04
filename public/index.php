<?php
$pageTitle = "Homepage";
include '../src/inc/header.php';
?>


<!DOCTYPE html>

<html>
<!-- accueil / carou / vid : comment gérer via boot ? superposition z axis ? -->
<head>
 	<!--jquery -->
 	<script src="https://code.jquery.com/jquery-3.1.0.js" integrity="sha256-slogkvB1K3VOkzAI8QITxV3VzpOnkeNVsKvtkYLMjfk=" crossorigin="anonymous"></script>
 	<!-- bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<meta http-equiv="Content-type" content="text/html" charset="utf-8" />
	<style>
		div {
			height:20vh;
			border: 5px solid black;
		}
	</style>
</head>

<body>

	<div class="container-fluid">

		<div class="row home_btn_jqbar" id="home_btn_jqbar1"> Barre de transition jQuery</div>

		<div class="row all_blsp"> Empty row tampon au dessus de la vidéo ?</div>

		<div class="row" id="home_video_ext">
<!--Largeur : 10 en xs, 8 en sm, 6 en md & lg -->
			<div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6" id="home_video_int">
			Vidéo de présentation du concept
			</div>
		</div>

		<div class="row all_blsp">Empty row tampon en dessous de la vidéo ?</div>

		<div class="row home_btn_jqbar" id="home_btn_jqbar2"> Barre de transition 2 jQuery</div>

		<div class="row all_blsp">Empty row de transition </div>

		<div class="row" id="home_startup_title">
			<h2>Et si vous donniez du temps à ces sociétés ?</h2>
			<h3> Ces start-up font déjà partie de l'aventure. Êtes vous prêts vous aussi à les rejoindre et à leur donner du temps ?</h3>
		</div>

		<div class="row" id="home_startup_list">
<!-- Positionnement des partenaires : l'un en dessous de l'autre en xs, 2 sur la même ligne en small, 3 / ligne en medium et large .
xs 	|	|	|			partenaires			|	|	|

sm 	|	|	partenaire	|	|	|	partenaire	|	|

md+	|	| 	| parten|	| parten|	| partne|	|	|

A voir : faire deux niveaux de bootstrap pour gerer le medium/ large et faire des 0,5 ? Ou maintenir la structure small pour med et juste passer à 3 pour lg ? Verif les resolution correspondantes.

!! Offset diffère un peu suivant la gestion des offset au milieu des partenaires -->

			<div class="home_blimg_startup col-xs-offset-2 col-xs-8 col-sm-offset-1 col-sm-4 col-md-offset-2 col-md-2"> Partnr 1 - modèle base
			</div>

			<div class="home_blimg_startup col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-4 col-md-offset-1 col-md-2"> Partnr 2 - offspé a sm et md+
			</div>

			<div class="home_blimg_startup col-xs-offset-2 col-xs-8 col-sm-offset-1 col-sm-4 col-md-offset-1 col-md-2"> Partnr 3 - offspé à md+
			</div>

			<div class="home_blimg_startup col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-4 col-md-offset-2 col-md-2"> Partnr 4 - offspé à sm et md+
			</div>

			<div class="home_blimg_startup col-xs-offset-2 col-xs-8 col-sm-offset-1 col-sm-4 col-md-offset-1 col-md-2"> Partnr 5 - offspé à md+ 
			</div>

			<div class="home_blimg_startup col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-4 col-md-offset-1 col-md-2"> Partnr 6 - offspé à sm et md+
			</div>
	
		</div>

		<div class="row all_blsp">Empty row de transition </div>

		<div class="row" id="home_partenaire_list">
	</div>

<?php
include 'include/footer.php';
?>

</body>