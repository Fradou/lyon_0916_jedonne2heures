<!DOCTYPE html>
<html>

<head>
	<?php include_once '../src/inc/links.php';
	?>
	<title>Homepage</title>
</head>
<body>

<?php include_once '../src/inc/header.php'; ?>

	<div class="container-fluid">

		<div class="row car">
			<div class="carousel" >
			</div>
		</div>

		<?php include_once "../src/inc/transitionrow.php"; ?>

		<div class="all_blsp_sm"></div>
<!--Largeur : 10 en xs, 8 en sm, 6 en md & lg -->
		<div class="row home_row_video">
			<div class="col-xs-offset-1 col-xs-10">
				<h2>Découvrez jedonne2heures.com en Vidéo</h2>
			</div>
		</div>
		<div class="row" id="home_video_ext">

			<div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8" id="home_video_int">

				<iframe src="https://www.youtube.com/embed/7bFaw-IZ6Xo" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>




		<div class="row" id="home_startup_title">
			<div class="col-xs-offset-2 col-xs-8">
				<h2>Et si vous donniez du temps a ces entreprises, a ces projets !</h2>
				<h3>Découvrez les entrepreneurs et leurs projets. Choisissez l'aventure à laquelle vous donnerez de votre temps libre.</h3>
			</div>
		</div>

		<div class="row" id="home_startup_list">
<!-- Positionnement des partenaires : l'un en dessous de l'autre en xs, 2 sur la même ligne en small, 3 / ligne en medium et large .
xs 	|	|	|			partenaires			|	|	|

sm 	|	|	partenaire	|	|	|	partenaire	|	|

md+	|	| 	| parten|	| parten|	| partne|	|	|

A voir : faire deux niveaux de bootstrap pour gerer le medium/ large et faire des 0,5 ? Ou maintenir la structure small pour med et juste passer à 3 pour lg ? Verif les resolution correspondantes.

!! Offset diffère un peu suivant la gestion des offset au milieu des partenaires -->

			<a href="https://www.mutum.com" target="_blank">
				<div id="home_blimg_startup1" class="home_blimg_startup col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-3 col-md-offset-2 col-md-2" >
					<div class="home_blimg_startuplogo">
						<img src="img/logomutm.png">
					</div>
				</div>
			</a>

			<a href="https://www.foodandyou.fr/" target="_blank">
				<div id="home_blimg_startup2" class="home_blimg_startup  col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-3 col-md-offset-1 col-md-2" >
					<div class="home_blimg_startuplogo">
						<img src="img/logofood&you.png">
					</div>
				</div>
			</a>

			<a href="https://commeunearmoire.com/fr" target="_blank">
				<div id="home_blimg_startup3" class="home_blimg_startup  col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-3 col-md-offset-1 col-md-2" >
					<div class="home_blimg_startuplogo">
						<img src="img/logocua.png">
					</div>
				</div>
			</a>

			<a href="https://www.tikaway.com/fr/" target="_blank">
				<div id="home_blimg_startup4" class="home_blimg_startup col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-3 col-md-offset-2 col-md-2" >
					<div class="home_blimg_startuplogo">
						<img src="img/logotikaway.png">
					</div>
				</div>
			</a>

			<a href="http://www.skware.com/" target="_blank">
				<div id="home_blimg_startup5" class="home_blimg_startup  col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-3 col-md-offset-1 col-md-2" >
					<div class="home_blimg_startuplogo">
						<img src="img/loskware.jpg">
					</div>
				</div>
			</a>

			<a href="http://www.2rives.tv/" target="_blank">
				<div id="home_blimg_startup6" class="home_blimg_startup  col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-3	 col-md-offset-1 col-md-2" >
					<div class="home_blimg_startuplogo">
						<img src="img/logo2rives.png">
						<h5>2 Rives TV</h5>
					</div>
				</div>
			</a>

		</div>



		<div class="row" id="home_partenaire_list">
			<h2>NOS PARTENAIRES</h2>
			<img src="img/logowild.png" class="img-responsive" alt="logo WCS">
		</div>
</div>

<?php
include_once '../src/inc/footer.php';
?>


</body>

</html>