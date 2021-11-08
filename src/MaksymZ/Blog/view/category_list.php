<?php
/** @var \MaksymZ\Blog\Block\CategoryList $block */
?>

<ul>
    <?php foreach ($block->getCategories() as $category) : ?>
        <li>
            <a href="/<?= $category->getCategoryUrl() ?>"><?= $category->getCategoryName() ?></a>
        </li>
    <?php endforeach; ?>
</ul>