<?php
    /** @var \DVCampus\Blog\Model\Category\Entity $category */
?>

<section title="Post">
    <h1><?= $category->getCategoryName() ?></h1>
    <div class="post-list">
        <?php foreach (blogGetCategoryPost($category->getCategoryId()) as $post) : ?>
            <div class="post">
                <a href="/<?= $post['url'] ?>" title="<?= $post['name'] ?>">
                    <img src="#" alt="<?= $post['name'] ?>" width="200"/>
                </a>
                <a href="/<?= $post['url'] ?>" title="<?= $post['name'] ?>"></a>
                <p><?= $post['description'] ?></p>
                <span><?= $post['author_name'] ?></span>
                <span><?= $post['date'] ?></span>
                <button type="button"><a href="/<?= $post['url'] ?>">Read more</a></button>
            </div>
        <?php endforeach; ?>
    </div>
</section>