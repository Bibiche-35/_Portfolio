<?php ob_start(); ?>
<main class="container">
<div class="main">
	<ul class="caminho">
		<li><a href="index.html">Home</a></li>
		<li> > </li>
		<li><H1>PORTFOLIO</H1></li>
	</ul>

<?php
//Initialisation $currentPage pour éviter les problèmes d'index.
$currentPage = 'home';

// Vérification que $_GET est une valeur pour récupérer cette dernière
if (isset ($_GET['page'])){
    $currentPage = $_GET['page'];
}
require __DIR__.'/data/portfolio.php';
require __DIR__.'/templates/home.tpl.php';
?>

</div>
</main>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>