<?php ob_start(); ?>
<main class="container">
<div class="main">
	<ul class="caminho">
		<li><a href="index.html">Home</a></li>
		<li> > </li>
		<li><H1>PORTFOLIO</H1></li>
	</ul>



	visuel et explication des projets dans le cadre du BTS SIO 
	- PPE (visuel diagramme de classe de java)
	- Stage chez Creha 
	(visuel cahier des charges (entretien des salariés),  
	visuel CDC, 
	Visuel WEB puis Visuel ACCESS, 
	finir avec Visuel du linkedin du maitre de stage)

</div>
</main>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>