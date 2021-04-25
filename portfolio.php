<?php ob_start(); ?>
<main class="container">
<div class="main">
	<ul class="caminho">
		<li><a href="index.html">Home</a></li>
		<li> > </li>
		<li><H1>PORTFOLIO</H1></li>
	</ul>

	<main class="right">
            <h2 class="right__title">Lorem ipsum</h2>
            <div class="posts">

                <?php foreach ($dataArticleList as $id => $anArticle) : ?>
                    <article class="post">
                        <a href="" class="post__category post__category--color-<?=$anArticle["categoryColor"];?>"><?= $anArticle["category"];?></a>
                        <h3><?php echo $anArticle["title"]; ?></h3>
                        <div class="post__meta">
                            <img src="<?php echo $anArticle["imgauthor"]; ?>" alt="" class="post__author-icon">
                            <strong class="post__author"><?php echo $anArticle["author"]; ?></strong>
                            <time datetime="2018-02-10"><?php echo $anArticle["date"]; ?></time>
                        </div>
                        <p><?php $content = $anArticle["content"];
                        $lightContent = substr($content, 0, 150);
                        echo $lightContent." ..."; ?> </p>
                        <a href="article.php?page=article&id=<?= $id; ?>">Continue reading</a>
                    </article>
                <?php endforeach; ?>
            </div>
        </main>

	visuel et explication des projets dans le cadre du BTS SIO 
	- PPE (visuel diagramme de classe de java)
	- Stage chez Creha 
	(visuel cahier des charges (entretien des salariés),  
	Analyse du besoin
    entretien avec salariés
    visuel CDC,
	Visuel WEB puis Visuel ACCESS, 

	finir avec Visuel du linkedin du maitre de stage)
    et Visuel du bulletin du premier semestre 






</div>
</main>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>