<?php
/** @var \DVCampus\Blog\Block\Author $block */
/** @var \DVCampus\Blog\Model\Post\Entity $p */
?>


<div>
    <?php foreach ($block->getPostsByAuthor($block->getUrl()) as $p) : ?>
        <h3>All posts by the author: <?= $p->getPostAuthorName() ?></h3>
        <div class="page">
            <img src="/post-placeholder.jpg" alt="<?= $p->getPostName() ?>" width="300"/>
            <h1><?= $p->getPostName() ?></h1>
            <p><?= $p->getPostDescription() ?></p>
            <span><?= $p->getPostDate() ?></span>
        </div>
    <?php endforeach; ?>
</div>

