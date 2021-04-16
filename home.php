<?php ob_start(); ?>
<main class="container">
<div class="capa">
	<div class="profile-pic">			
		<img src="image/photo.jpg" alt="photo">
	</div>
	<div class="portfolio-title">
		<h1>Fabrice HURÉ</h1>
		<h2>Après 10 ans d’expérience dans la gestion de projets dans l’environnement industriel puis 12 ans d’expérience managériale dans le Facility Management dans le domaine tertiaire, j’ai souhaité faire une pause dans ma carrière professionnelle afin de porter un film-documentaire à travers toute la France. Ce projet personnel m'a permis avec succès de fédérer à travers l'organisation de projections débats et de mobiliser les acteurs autour d’une offre de soin innovante dans le secteur de la santé.</br>
		Afin de préparer ma reconversion professionnelle, en Avril 2020, j'ai réalisé un bilan de compétences qui a permis d’identifier ma volonté de porter des projets numériques innovants, si possible dans le domaine de la e-santé, dans un rôle d'interface entre le client et les équipes techniques, de marketing et de production.</br> 
		Je suis actuellement étudiant en BTS Services Informatiques aux Organisations spécialité SLAM (Applications métiers) au GRETA à Saint Malo où l'aspiration pour les outils numériques se confirme et me pousse à continuer dans cette voie.</h2>
	</div>
</div>
</main>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>