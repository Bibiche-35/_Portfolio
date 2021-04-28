<?php

$idArticle = $_GET['id'];

?>
            <main class="right">
                <h2 class="right__title"><?php echo ($dataArticleList["$idArticle"]["title"]) ?></h2>
                <div class="posts__article">
                    <div class="post__solo">
                        <a href="" class="post__category post__category--color-<?=$dataArticleList["$idArticle"]["categoryColor"];?> "><?=$dataArticleList["$idArticle"]["category"];?></a></br>
                        <strong class="post__author"><?php echo ($dataArticleList["$idArticle"]["author"]) ?></strong></br>
                        <time datetime="2018-02-10"><?php echo ($dataArticleList["$idArticle"]["date"]) ?></time></br>
                        <H2><a href="<?php echo ($dataArticleList["$idArticle"]["link"]) ?>"  class="post__link" target="_blank"><?php echo ($dataArticleList["$idArticle"]["link"]) ?></a></br></h2>
                        <div class = "articlepost">
                        <img src="<?php echo ($dataArticleList["$idArticle"]["img"]) ?>" class="post__img">
                        <p><?php echo ($dataArticleList["$idArticle"]["content"]) ?></p></br>
                        <script>
                            document.write('<a href="' + document.referrer + '" class="post__link">Go Back</a>');
                        </script>
                    </div> 
                </div>
            </main>