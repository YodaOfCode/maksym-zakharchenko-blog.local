<?php
require_once '../src/data.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Maksym Zakharchenko Blog</title>
    <style>
        header,
        main,
        footer {
            border: 1px dashed black;
        }

        .post-list {
            display: flex;
            justify-content: center;
        }

        .post {
            width: 350px;
            height: 100px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin: 25px;
            border: 1px solid black;
        }
    </style>
</head>
<body>
<header>
    <a href="/" title="Maksym Zakharchenko Blog">
        <img src="logo.jpg" alt="Logo" width="200"/>
    </a>
    <nav>
        <ul >
            <?php foreach (catalogGetCategory() as $category) : ?>
                <li>
                    <a href="/<?= $category['url'] ?>"><?= $category['name'] ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>

<main class="post-list">
    <?php require_once "../src/pages/$page" ?>
</main>

<footer>
    <nav>
        <ul>
            <li>
                <a href="/about-us">About Us</a>
            </li>
            <li>
                <a href="/terms-and-conditions">Terms & Conditions</a>
            </li>
            <li>
                <a href="/contact-us">Contact Us</a>
            </li>
        </ul>
    </nav>
    <p>© Maksym Zakharchenko Blog 2021. All Rights Reserved.</p>
</footer>
</body>
</html>