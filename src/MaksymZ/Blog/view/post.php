
<?php
/** @var \MaksymZ\Blog\Block\Post $block */
$post = $block->getPost();
?>

<div class="page">
    <img src="/post-placeholder.jpg" alt="<?= $post->getPostTitle() ?>"/>
    <h1><?= $post->getPostTitle() ?></h1>
    <p><?= $post->getPostDescription() ?></p>
    <span><?= $post->getPostDate() ?></span>
    <div>
        <h3>
            <a href="<?= $block->getAuthorById($post->getPostAuthorId()) ?>"> Get this author by ID </a>
        </h3>
    </div>
</div>