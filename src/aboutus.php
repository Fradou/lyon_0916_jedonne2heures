<!DOCTYPE html>
<html>

<head>
	<?php include_once '../src/inc/links.php';	?>
	<title>Qui sommes-nous ?</title>
</head>
<body>

	<?php include_once '../src/inc/header.php'; ?>

	<div class="container-fluid">
		<div class="row all_blsp_xs all_blsp_sm all_blsp_md"></div>

		<div class="row all_blsp">
            <div class="who_bltxt col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
                <h1>Qui sommes-nous ?</h1>
            </div>
        </div>
		<div class="row who_blocimg">
			<div class="col-xs-offset-3 col-xs-6 col-sm-offset-2 col-sm-3 col-md-offset-3 col-md-2" id="who_blocimg_pic1">
				<img src="../public/img/je-donne-2-heures-guylaine-antonini.png" class="img-responsive who_img_portrait" alt="Guylaine Antonini cofondatrice Je Donne 2 Heures">
				<div class="who_blocsoc">
					<h2>Guylaine Antonini</h2>
					<a href="https://twitter.com/Guyylaine" target="_blank"><img  src="../public/img/twitter.png" alt=""></a>
					<a href="https://fr.linkedin.com/in/guylaineantonini" target="_blank"><img  src="../public/img/linkedin.png" alt=""></a>
				</div>
			</div>
			<div class="col-xs-offset-3 col-xs-6 col-sm-offset-2 col-sm-3 col-md-offset-2 col-md-2" id="who_blocimg_pic2">
                <img src="../public/img/je-donne-2-heures-nicolas-antonini.png" class="img-responsive who_img_portrait" alt="Nicolas Antonini cofondateur Je Donne 2 Heures">
				<div class="who_blocsoc">
					<h2>Nicolas Antonini</h2>
					<a href="https://twitter.com/nicolasantonini" target="_blank"><img  src="../public/img/twitter.png" alt=""></a>
					<a href="https://fr.linkedin.com/in/nicolasantonini" target="_blank"><img  src="../public/img/linkedin.png" alt=""></a>
				</div>
			</div>

		</div>
		<div class="row who_bltxt" id="who_bltxt_ext">
			<div class=" who_bltxt col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8" id="who_bltxt_int">
				<p>Le temps c'est de l'argent ! Grâce à <span>Je Donne 2 Heures </span>pas besoin d'investir, Investissez-vous ! <span>Je Donne 2 Heures</span> permet à toutes et à tous de devenir acteur du développement de l'entrepreneuriat.
						Donnez du sens à votre temps libre : offrez le à des entrepreneurs et aidez les à donner vie à leurs projets.
						C'est en participant activement à la réussite des autres que vous recevrez en retour une multitude d'opportunités ! Aider l'autre c'est grandir.</p>
			</div>
		</div>

		<div class="row who_form_ext">
			<div class="who_form_int col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6" id="who_form">
				<h2 class="text-center">Contactez-nous ! <br/>
					<small class="text-muted">Vous avez des questions ? Vous voulez nous rencontrer, prendre un café ?</small> </h2>
			</div>
			<div class="who_form_int col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
				<?php include_once 'inc/formaboutus.php'; ?>
			</div>
		</div>

<?php
include_once 'inc/footer.php';
?>
</body>

</html>
