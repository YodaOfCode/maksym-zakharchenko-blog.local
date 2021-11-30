<?php
/** @var \MaksymZ\Blog\Block\RecentPosts $block */
/** @var \MaksymZ\Blog\Model\Post\Entity $recentPostInfo */
?>

<div class="post-list">
    <?php foreach ($block->newPosts() as $recentPostInfo) : ?>
        <div class="post-list">
            <div class="post">
                <h1>
                    <a href="/<?= $recentPostInfo->getPostUrl() ?>" title="<?= $recentPostInfo->getPostTitle() ?>">
                        <img src="/post.jpg" alt="<?= $recentPostInfo->getPostTitle() ?>"/>
                    </a>
                </h1>
                <a href="/<?= $recentPostInfo->getPostUrl() ?>"><?= $recentPostInfo->getPostTitle() ?></a>
                <h3>
                    <a href="<?= $block->getAuthorsUrl('author' . '-' . $recentPostInfo->getPostAuthorId()) ?>">
                        Get posts by this author
                    </a>
                </h3>
                <span>Publicated: <?= $recentPostInfo->getPostDate() ?> days ago</span>
                <button type="button"><a href="<?= $recentPostInfo->getPostUrl() ?>">Read more</a></button>
            </div>
        </div>
    <?php endforeach; ?>
</div>
