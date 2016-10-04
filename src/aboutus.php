<?php
$pageTitle = "Qui sommes nous ?";
include 'inc/header.php';
?>

<!DOCTYPE html>

<html>

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
			border:5px solid black;
		}
	</style>
</head>

<body>

	<div class="container-fluid">

		<div class="row all_blsp">Empty row de transition </div>

		<div class="row who_blocimg">
			<div class="col-xs-offset-1 col-xs-4 col-sm-offset-2 col-sm-3 col-md-offset-3 col-md-2" id="who_blocimg_pic1"> 
				<div> Photo 1 </div>
				<div>
					<h2>Guylaine Antonini</h2>
					<a href="reseausociaux"></a>
				</div>
			</div>
			<div class="col-xs-offset-2 col-xs-4 col-sm-offset-2 col-sm-3 col-md-offset-2 col-md-2" id="who_blocimg_pic2"> 
				<div> Photo 2 </div>
				<div>
					<h2>Nicolas Antonini</h2>
					<a href="reseausociaux"></a>
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
include 'include/footer.php';
?>

</body>

</html>
