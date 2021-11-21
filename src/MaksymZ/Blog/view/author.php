<?php
/** @var \MaksymZ\Blog\Block\Author $block */
/** @var \MaksymZ\Blog\Model\Post\Entity $p */
?>

<div>
    <?php foreach ($block->getAuthorById() as $p) : ?>
        <h3>All posts by the author with ID:
            <?= $p->getPostAuthorId() ?>
            and name
            <?= $block->getAuthor()->getAuthorName() ?>
        </h3>
        <div class="page">
            <img src="/post-placeholder.jpg" alt="<?= $p->getPostTitle() ?>" width="300"/>
            <h1><?= $p->getPostTitle() ?></h1>
            <p><?= $p->getPostDescription() ?></p>
            <span><?= $p->getPostDate() ?></span>
        </div>
    <?php endforeach; ?>
</div>

