<!-- On va créer un template (aussi appelé gabarit) de page. -->
<!-- On va y retrouver toute la structure de la page, avec des "trous" à remplir. -->

<!DOCTYPE html>
<html lang="en">
<head>	
	<title>Fabrice HURÉ - Portfolio Online</title>	
	<meta charset="utf-8">
    <link rel="stylesheet" href="public/CSS/reset.css">
	<link rel="stylesheet" href="css/styles.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:100,400" rel="stylesheet">
	<script type="text/javascript" src="js/scripts.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>
    <?php include 'header.php'; ?>	
    <p><?= $content ?></p>
    <?php include 'footer.php'; ?>
</body>
</html>

