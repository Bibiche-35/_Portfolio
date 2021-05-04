<?php ob_start(); ?>
<main class="container">

			<div class="main">
				
				
				<ul class="caminho">
					<li><a href="index.php">Home</a></li>
					<li> > </li>
					<li><H1>PROJET COMMUNICATION</H1></li>
				</ul>

				<div class="capa">
				<H2>Co-auteur d'un film privé à vocation documentaire <a href="https://vimeo.com/304411586" title="Pour visionner le documentaire complet !" target="_blank">"La montagne dans le sang".</a><br />
				Organisation et pilotage de toute la stratégie de communication institutionnelle soignante et externe (réseaux sociaux). </br>
				Création <a href=https://drive.google.com/drive/folders/1d9AV8RvRim2Lfna0lqSZi2PO2-r1MMsB?usp=sharing target="_blank" title="Pour visionner celui-ci !"> package communicant</a>, <a href=https://drive.google.com/file/d/1ADBdcigCOPUDUG4L5tFj5ANNhKScWXwg/view?usp=sharing target="_blank" title="Pour visionner celui-ci !"> dossier de presse</a>, réseaux sociaux et <a href=https://drive.google.com/file/d/1S4Ji3idwZZskQtzoJ49RzPoL8clcHr5y/view?usp=sharing target="_blank" title="Pour visionner celui-ci !">Plaidoyer sur l'offre de soin (80 pages)</a>. Pilotage, organisation et animation des conférences/débats en France. </br>
				Prix coup de cœur et Prix des étudiants au <a href="https://youtu.be/SsKlfTl4qmI" title="Pour visionner ma speed-vision au Festival de la communication santé !" target="_blank"> "festival de la communication santé 2019".</a></H3>
				<H2>Ce film a été visionné plus de 13 000 fois et 45 projections-débats ont été organisées en france et dom-Tom.</br></H2>
				</div>

	<img class="photosantevisuel" src="image/accueil.jpg">
	<img class="photosante" src="image/SpeedVisionFestivalCommunication.jpg">
	<img class="photosante" src="image/image1.jpg">
	<img class="photosante" src="image/PrixCoupdeCoeurFestivalCommunication.jpg">
	<img class="photosante" src="image/allodocteur.jpg">
	<img class="photosante" src="image/PrixEtudiantsFestivalCommunication.jpg">
	<img class="photosante" src="image/image2.jpg">

</div>

				


</main>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>