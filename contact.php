<?php ob_start(); ?>
<main class="container">

			<div class="main">
				
				
				<ul class="caminho">
					<li><a href="index.html">Home</a></li>
					<li> > </li>
					<li><H1>CONTACT</H1></li>
				</ul>

			

				<h3>E-mail:</h3>
				<p></p>

				<h3>Telephone:</h3>
				<p></p>

				<h3>Réseaux sociaux:</h3>
				
				<a href="" target="_blank"><img class="social-img" src="img/download.jpg" alt="Link para o Instagram"></a>

				<a href="" target="_blank"><img class="social-img" src="img/download1.png" alt="Link para o Facebook"></a>

				<a href="" target="_blank"><img class="social-img" src="img/download2.jpg" alt="Link para o Linkedin"></a>
			
			</div>	
</main>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>