<?php ob_start(); ?>
<main class="container">
<?php
echo $_GET["id"];
?>
<?php
if ($_GET["id"] >= 10 && $_GET["id"] < 20) :
    require './data/portfolio.php';
endif ;
if ($_GET["id"] >= 20 && $_GET["id"] < 30) :
    require './data/veille.php';
endif ;
if ($_GET["id"] > 30) :
    require './data/auto-Formation.php';
endif;
require __DIR__ . '/templates/article.tpl.php';
?>
</main>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>