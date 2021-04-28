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

	<h1>Projet Communicant Santé</h1>
	<h2>🙏 Quel chemin depuis la rupture avec mon emploi en Janvier 2019... Quelle fierté et quelle satisfaction d'avoir porté la réalisation de projections débats partout en france (45 projections) afin d'informer les patients sur une offre de soin innovante et de sensibiliser les soignants sur la nécessité de co-construire le projet de vie des patients. </br>
	Cela récompense la démarche et le travail communicant du projet et ses différents supports :</br>
	- Plaidoyer sur l'offre de soin</br>
	- Dossier de presse du film, Affiche et Flyer Type</br>
	- Package communicant</br>
	- Réseaux sociaux (Facebook, Twitter et Instagram) </br>
	- Nombreux Articles Presse, émission TV et Radio</br></h2>

	<img class="photosantevisuel" src="image/accueil.jpg">
	<img class="photosante" src="image/SpeedVisionFestivalCommunication.jpg">
	<img class="photosante" src="image/image2.jpg">
	<img class="photosante" src="image/PrixCoupdeCoeurFestivalCommunication.jpg">
	<img class="photosante" src="image/PrixEtudiantsFestivalCommunication.jpg">
	<img class="photosante" src="image/image1.jpg">
</div>
</main>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>