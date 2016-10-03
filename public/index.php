<?php
$pageTitle = "Homepage";
include_once '../src/inc/header.php';
?>




	<div class="container-fluid">

		<div class="row trans_bar" id="trans_bar_1" style="border:5px solid black"> Barre de transition jQuery</div>

		<div class="row" style="border:5px solid black"> Empty row tampon au dessus de la vidéo ?</div>

		<div class="row" id="home_vid" style="height:60vh">
<!--Largeur : 10 en xs, 8 en sm, 6 en md et 4 en lg -->
			<div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6" style="background-color:blue; height:100%">
			Vidéo de présentation du concept
			</div>
		</div>

		<div class="row" style="border:5px solid black">Empty row tampon en dessous de la vidéo ?</div>

		<div class="row trans_bar" id="trans_bar_2" style="background-color:green"> Barre de transition 2 (jQuery again ?)</div>

		<div class="row">Empty row de transition </div>

		<div class="row" id="partn_list" style="height:auto">
<!-- Positionnement des partenaires : l'un en dessous de l'autre en xs, 2 sur la même ligne en small, 3 / ligne en medium et large .
xs 	|	|	|			partenaires			|	|	|

sm 	|	|	partenaire	|	|	|	partenaire	|	|

md+	|	| 	| parten|	| parten|	| partne|	|	|

A voir : faire deux niveaux de bootstrap pour gerer le medium/ large et faire des 0,5 ? Ou maintenir la structure small pour med et juste passer à 3 pour lg ? Verif les resolution correspondantes.

!! Offset diffère un peu suivant la gestion des offset au milieu des partenaires -->

			<div class="col-xs-offset-2 col-xs-8 col-sm-offset-1 col-sm-4 col-md-offset-2 col-md-2" style="background-color:blue; margin-bottom: 5vh"> Partnr 1 - modèle base
			</div>

			<div class="col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-4 col-md-offset-1 col-md-2" style="background-color:blue; margin-bottom: 5vh"> Partnr 2 - offspé a sm et md+
			</div>

			<div class="col-xs-offset-2 col-xs-8 col-sm-offset-1 col-sm-4 col-md-offset-1 col-md-2" style="background-color:blue; margin-bottom: 5vh"> Partnr 3 - offspé à md+
			</div>

			<div class="col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-4 col-md-offset-2 col-md-2" style="background-color:blue; margin-bottom: 5vh"> Partnr 4 - offspé à sm et md+
			</div>

			<div class="col-xs-offset-2 col-xs-8 col-sm-offset-1 col-sm-4 col-md-offset-1 col-md-2" style="background-color:blue; margin-bottom: 5vh"> Partnr 5 - offspé à md+ 
			</div>

			<div class="col-xs-offset-2 col-xs-8 col-sm-offset-2 col-sm-4 col-md-offset-1 col-md-2" style="background-color:blue; margin-bottom: 5vh"> Partnr 6 - offspé à sm et md+
			</div>
	
		</div>

		<div class="row" style="background-color:green">Empty row de transition </div>

	</div>

	<footer>
	</footer>

</body>


<?php
//include '../src/inc/footer.php';
?>