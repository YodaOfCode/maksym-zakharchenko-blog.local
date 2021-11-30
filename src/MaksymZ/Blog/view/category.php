<?php
/** @var \MaksymZ\Blog\Block\Category $block */
?>

<section title="Post">
    <h1><?= $block->getCategory()->getCategoryName() ?></h1>
    <div class="post-list">
        <?php foreach ($block->getCategoryPosts() as $post) : ?>
            <div class="post">
                <a href="/<?= $post->getPostUrl() ?>" title="<?= $post->getPostTitle() ?>">
                    <img src="/post.jpg" alt="<?= $post->getPostTitle() ?>" width="200"/>
                </a>
                <a href="/<?= $post->getPostUrl() ?>" title="<?= $post->getPostTitle() ?>"></a>
                <p><?= $post->getPostDescription() ?></p>
                <div>
                    <h3>
                        <a href="<?= $block->getAuthorById($post->getPostAuthorId()) ?>">
                            Get author by ID
                        </a>
                    </h3>
                </div>
                <span><?= $post->getPostDate() ?></span>
                <button type="button"><a href="/<?= $post->getPostUrl() ?>">Read more</a></button>
            </div>
        <?php endforeach; ?>
    </div>
</section>