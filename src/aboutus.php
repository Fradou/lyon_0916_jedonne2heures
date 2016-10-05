<?php
$pageTitle = "Qui sommes nous ?";
include_once 'inc/header.php';
?>
    <!--<style>
        div {
            height:20vh;
            border:5px solid black;
        }
    </style>-->

	<div class="container-fluid">

		<div class="row all_blsp">Empty row de transition </div>

		<div class="row who_blocimg">
			<div class="col-xs-offset-1 col-xs-4 col-sm-offset-2 col-sm-3 col-md-offset-3 col-md-2" id="who_blocimg_pic1">
				<div> Photo 1 </div>
				<div class="who_blocsoc">
					<h2>Guylaine Antonini</h2>
					<a href="https://twitter.com/Guyylaine" target="_blank"><img  src="../public/img/twitter.png" alt=""></a>
					<a href="https://fr.linkedin.com/in/guylaineantonini" target="_blank"><img  src="../public/img/linkedin.png" alt=""></a>
				</div>
			</div>
			<div class="col-xs-offset-2 col-xs-4 col-sm-offset-2 col-sm-3 col-md-offset-2 col-md-2" id="who_blocimg_pic2">
				<div> Photo 2 </div>
				<div class="who_blocsoc">
					<h2>Nicolas Antonini</h2>
					<a href="https://twitter.com/nicolasantonini" target="_blank"><img  src="../public/img/twitter.png" alt=""></a>
					<a href="https://fr.linkedin.com/in/nicolasantonini" target="_blank"><img  src="../public/img/linkedin.png" alt=""></a>
				</div>
		</div>

		<div class="row all_blsp">Empty row de transition </div>

		<div class="row who_bltxt" id="who_bltxt_ext">
			<div class=" who_bltxt col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6" id="who_bltxt_int"> Bloc de texte du qui sommes nous
			</div>
		</div>

		<div class="row" id="who_form_title">
			<h2>vous avez des questions ? Vous voulez nous rencontrer ?<br> Contactez-nous ! </h2>
		</div>
		<div class="row" id="who_form_content">
		</div>

		<div class="row all_blsp">Empty row de transition to footer </div>

	</div>

<?php
include_once 'inc/footer.php';
?>