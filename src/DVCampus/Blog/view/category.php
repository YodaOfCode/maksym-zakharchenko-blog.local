<?php
/** @var \DVCampus\Blog\Block\Category $block */
?>

<section title="Post">
    <h1><?= $block->getCategory()->getCategoryName() ?></h1>
    <div class="post-list">
        <?php foreach ($block->getCategoryPosts() as $post) : ?>
            <div class="post">
                <a href="/<?= $post->getPostUrl() ?>" title="<?= $post->getPostName() ?>">
                    <img src="/post.jpg" alt="<?= $post->getPostName() ?>" width="200"/>
                </a>
                <a href="/<?= $post->getPostUrl() ?>" title="<?= $post->getPostName() ?>"></a>
                <p><?= $post->getPostDescription() ?></p>
                <div>
                    <h3>
                        <a href="<?= $block->getAuthorId($post->getPostAuthorId()) ?>"> Get author by ID:
                            <?= $block->getAuthorId($post->getPostAuthorId()) ?>
                        </a>
                    </h3>
                </div>

                <span><?= $post->getPostDate() ?></span>
                <button type="button"><a href="/<?= $post->getPostUrl() ?>">Read more</a></button>
            </div>
        <?php endforeach; ?>
    </div>
</section>