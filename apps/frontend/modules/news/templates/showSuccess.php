<h3><?php echo $article->getTile(); ?></h3>
    <img src="/uploads/news/<?php echo $article->getPic(); ?>" >
 <p>   <?php echo $article->getBody(ESC_RAW); ?> </p>
