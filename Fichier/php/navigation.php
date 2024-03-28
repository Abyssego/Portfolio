<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/styleNavigation.css">
	<link rel="icon" type="image/x-icon" href="../../image/photo2.png">
	<title>Navigation</title>
</head>
<body>

	<?php include("head.php"); ?>

	<div class="navigation">
		<div class="bordure">
			<div class="allButton">
				<button id="button-85" role="button" onclick="button" target="../index.php"></button> <br />
				<button id="button-85" role="button"><a href="projet.php?project=<?php echo $row['idProjet']; ?>">Projets BTS</a></button> <br />
				<button id="button-85" role="button"><a href="projet.php?project=<?php echo $row['idProjet']; ?>">Projets personnelles</a></button> <br />
				<button id="button-85" role="button"><a href="projet.php?project=<?php echo $row['idProjet']; ?>">Exercices</a></button> 
			</div>
		</div>
	</div>

</body>
</html>