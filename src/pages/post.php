
<?php
/** @var \DVCampus\Blog\Model\Post\Entity $post */
?>

<div class="page">
    <img src="/post-placeholder.jpg" alt="<?= $post->getPostName() ?>" width="300"/>
    <h1><?= $post->getPostName() ?></h1>
    <p><?= $post->getPostDescription() ?></p>
    <span><?= $post->getPostDate() ?></span>
</div>