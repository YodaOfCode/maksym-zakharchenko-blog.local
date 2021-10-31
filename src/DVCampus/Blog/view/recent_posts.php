<?php
/** @var \DVCampus\Blog\Block\RecentPosts $block */
/** @var \DVCampus\Blog\Model\Post\Entity $date */
?>

<div class="post-list">
    <?php foreach ($block->newPosts($block->getPosts()) as $date) : ?>
        <div class="post-list">
            <div class="post">
                <h1>
                    <a href="/<?= $date->getPostUrl() ?>" title="<?= $date->getPostName() ?>">
                        <img src="/post.jpg" alt="<?= $date->getPostName() ?>"/>
                    </a>
                </h1>
                <a href="/<?= $date->getPostUrl() ?>"><?= $date->getPostName() ?></a>
                <h3>
                    <a href="<?= $block->getAuthorsUrl($date->getPostAuthorId()) ?>">Get posts by this author</a>
                </h3>
                <span>Publicated: <?= $date->getPostDate() ?> days ago</span>
                <button type="button"><a href="<?= $date->getPostUrl() ?>">Read more</a></button>
            </div>
        </div>
    <?php endforeach; ?>
</div>
