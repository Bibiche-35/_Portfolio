<?php ob_start(); ?>
<main class="container">
<div class="main">
	<ul class="caminho">
		<li><a href="index.html">Home</a></li>
		<li> > </li>
		<li><H1>VEILLE</H1></li>
	</ul>

	Veille sur réseaux sociaux : 
	Twitter et linkedin sur profils particuliers : lister les profils

	Installer d'une newsletteur via un agrégateur RSS : https://feedly.com/i/subscription/feed%2Fhttp%3A%2F%2Fblog.wescale.fr%2Ffeed%2F
	Veille Juridique (voir liens Google), essayer de tout intégrer dans le flux RSS

	Méthode 3 fois par semaine max...

</div>
</main>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>