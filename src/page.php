<?php /** @var \DVCampus\Framework\View\Renderer $this */ ?>

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
            margin: 10px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .post {
            padding: 50px;
            width: 200px;
            height: 350px;
            display: flex;
            flex-direction: column;
            justify-content: center;
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
        <?= $this->render(\DVCampus\Blog\Block\CategoryList::class) ?>
    </nav>
</header>
<div class="container">
    <main>
        <?= $this->render($this->getContent(), $this->getContentBlockTemplate()) ?>
    </main>
</div>

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