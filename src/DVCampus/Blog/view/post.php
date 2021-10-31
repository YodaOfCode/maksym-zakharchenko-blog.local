
<?php
/** @var \DVCampus\Blog\Block\Post $block */
$post = $block->getPost();
?>

<div class="page">
    <img src="/post-placeholder.jpg" alt="<?= $post->getPostName() ?>"/>
    <h1><?= $post->getPostName() ?></h1>
    <p><?= $post->getPostDescription() ?></p>
    <span><?= $post->getPostDate() ?></span>
    <div>
        <h3>
            <a href="<?= $block->getAuthorId($post->getPostAuthorId()) ?>"> Get author by ID:
                <?= $post->getPostAuthorId() ?>
            </a>
        </h3>
    </div>
</div>