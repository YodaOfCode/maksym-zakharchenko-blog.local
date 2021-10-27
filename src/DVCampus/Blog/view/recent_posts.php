<?php
/** @var \DVCampus\Blog\Block\RecentPosts $block */
/** @var \DVCampus\Blog\Model\Post\Entity $date */
?>

<?php foreach ($block->newPosts($block->getPosts()) as $date) : ?>
    <div class="post-list">
        <div class="post">
            <a href="/<?= $date->getPostUrl() ?>" title="<?= $date->getPostName() ?>">
                <img src="#" alt="<?= $date->getPostName() ?>" width="200"/>
            </a>
            <a href="/<?= $date->getPostUrl() ?>" title="Product 1"><?= $date->getPostName() ?></a>
            <span>Publicated: <?= $date->getPostDate() ?> days ago</span>
            <button type="button"><a href="<?= $date->getPostUrl() ?>">Read more</a></button>
        </div>
    </div>
<?php endforeach; ?>