<?php ob_start(); ?>
<main class="container">

			<div class="main">
				
				
				<ul class="caminho">
					<li><a href="index.php">Home</a></li>
					<li> > </li>
					<li><H1>CONTACT</H1></li>
				</ul>



				<h2>E-mail:</h2>
				<p>fabrice.hure.35@gmail.com</p>

				<h2>Telephone:</h2>
				<p>06.80.33.73.32</p>

				<h2>Réseaux sociaux:</h2>
				
				<a href="https://www.instagram.com/lamontagnedanslesang/?hl=fr" target="_blank"><img class="social-img" src="image/download.jpg" alt="Link Instagram"></a>

				<a href="https://www.facebook.com/lamontagnedanslesang.lefilm" target="_blank"><img class="social-img" src="image/download1.png" alt="Link Facebook"></a>

				<a href="https://www.linkedin.com/feed/" target="_blank"><img class="social-img" src="image/download2.jpg" alt="Link Linkedin"></a>

				<a href="https://www.linkedin.com/feed/" target="_blank"><img class="social-img" src="image/twitter.png" alt="Link twitter"></a>

				<a href="https://vimeo.com/user87724430" target="_blank"><img class="social-img" src="image/vimeo.png" alt="Link vimeo"></a>
	
				<div class="bulletin">			
					<img src="image/bulletinPremierSemestre.jpg" alt="photo">
				</div>
			</div>	


</main>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>