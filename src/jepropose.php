<?php
$pageTitle = "Je propose";
include 'include/header.php';
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
		}
	</style>
</head>

<body>

	<div class="container-fluid">

		<div class="row" style="border:5px solid black">Empty row de transition </div>

		<div class="row">
			<div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6" id="img_ambiance" style="background-color:blue"> "Image d'ambiance"</div>
		</div>

		<div class="row" style="border:5px solid black">Empty row de transition </div>

		<div class="row" style="height:60vh">
			<div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6" id="img_ambiance" style="height:100%; background-color:blue"> "Bloc de texte presentation."</div>
		</div>

		<div class="row" style="border:5px solid black">Empty row de transition </div>

		<div class="row" style="height:80vh">
			<div class="col-xs-offset-1 col-xs-10 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6" id="img_ambiance" style="height:100%; background-color:blue"> "Formulaire de souscription"</div>
		</div>

		<div class="row" style="border:5px solid black">Empty row de transition </div>

	</div>

</body>

</html>



<?php
include 'include/footer.php';
?>