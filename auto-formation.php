<?php ob_start(); ?>
<main class="container">
<div class="main">
	<ul class="caminho">
		<li><a href="index.html">Home</a></li>
		<li> > </li>
		<li><H1>VEILLE</H1></li>
	</ul>

    Auto-formation :
	- Application babbel (visuels) et BBC Learning
	- Open class room (liste des cours)
    - Formation diverses E-santé MOOC module 1
	- Mimo
	- Sololearn


</div>
</main>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>