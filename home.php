<?php ob_start(); ?>
<main class="container">
<div class="capa">
	<div class="profile-pic">			
		<img src="image/photo.jpg" alt="photo">
	</div>
	<div class="portfolio-title">
		<h1>Fabrice HURÉ</h1>
		<h2>📅 Actuellement étudiant en BTS Services Informatiques aux Organisations spécialité SLAM (Solutions logicielles et applications métiers) au GRETA à Saint Malo (jusqu'au 25/06/2021). </br></br>
		Mes aspirations pour la gestion de projets numériques se confirme. C'est ainsi que je viens d'être accepté à l'ENI à Rennes, afin de prolonger mon apprentissage : BAC+4 Concepteur Développeur d’Applications en alternance sur 2 ans avec une disponibilité au 01/08/2021.</br></br>
		🤝 En avril 2020, mon bilan de compétences a permis d’identifier ma volonté d'être un véritable véritable "Facilitateur" au sein d'une organisation afin de porter des projets numériques innovants, de préférence dans le domaine de la E-santé.</br> J'ai toujours été stimulé par les projets transverses (Achat, Méthode, Amélioration continue, Logistique, QHSE, Communication et Moyens généraux) et l'animation des outils numériques (GMAO, ERP, SAP, Dématérialisation, Transformation digitale).</br></br>
		⚕️ En veille permanent sur l'accélération du virage numérique #MaSanté2022, je suis fortement motivé pour m'investir professionnellement dans cette transformation afin d’évoluer les usages vers plus de sécurité et d’interopérabilité au service des patients et des professionnels.</br></h2>
	</div>

</div>
</main>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>