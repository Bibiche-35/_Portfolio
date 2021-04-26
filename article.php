<?php ob_start(); ?>
<main class="container">
    <?php
require __DIR__ . '/data/datas.php';
require __DIR__ . '/templates/article.tpl.php';
?>
</main>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>