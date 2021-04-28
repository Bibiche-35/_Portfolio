<?php ob_start(); ?>
<main class="container">
<?php
echo $_GET["id"];
?>
<?php
if ($_GET["id"]>30) {
    require __DIR__ . '/data/portfolio.php';
}
elseif ($_GET["id"]<20) {
    require __DIR__ . '/data/veille.php';
}
else {
    require __DIR__ . '/data/auto-Formation.php';
}
require __DIR__ . '/templates/article.tpl.php';
?>
</main>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>