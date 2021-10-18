<?php

declare(strict_types=1);

function blogGetCategory(): array
{
    return [
        1 => [
            'category_id' => 1,
            'name' => 'Sport',
            'url' => 'sport',
            'posts' => [1, 2, 3]
        ],
        2 => [
            'category_id' => 2,
            'name' => 'Politics',
            'url' => 'politics',
            'posts' => [4, 5, 6]
        ],
        3 => [
            'category_id' => 3,
            'name' => 'IT',
            'url' => 'it',
            'posts' => [7, 8, 9]
        ],
    ];
}

function blogGetPost(): array
{
    return [
        1 => [
            'product_id' => 1,
            'name' => 'Post 1',
            'author_name' => 'John Doe',
            'url' => 'post-1',
            'description' => 'Post 1 Description',
            'date' => '31 October 2011'
        ],
        2 => [
            'product_id' => 2,
            'name' => 'Post 2',
            'author_name' => 'John Doe',
            'url' => 'post-2',
            'description' => 'Post 2 Description',
            'date' => '31 October 2012'
        ],
        3 => [
            'product_id' => 3,
            'name' => 'Post 3',
            'author_name' => 'John Doe',
            'url' => 'post-3',
            'description' => 'Post 3 Description',
            'date' => '31 October 2013'
        ],
        4 => [
            'product_id' => 4,
            'name' => 'Post 4',
            'author_name' => 'John Doe',
            'url' => 'post-4',
            'description' => 'Post 4 Description',
            'date' => '31 October 2010'
        ],
        5 => [
            'product_id' => 5,
            'name' => 'Post 5',
            'author_name' => 'John Doe',
            'url' => 'post-5',
            'description' => 'Post 5 Description',
            'date' => '31 October 2020'
        ],
        6 => [
            'product_id' => 6,
            'name' => 'Post 6',
            'author_name' => 'John Doe',
            'url' => 'post-6',
            'description' => 'Post 6 Description',
            'date' => '31 October 2016'
        ],
        7 => [
            'product_id' => 7,
            'name' => 'Post 7',
            'author_name' => 'John Doe',
            'url' => 'post-7',
            'description' => 'Post 7 Description',
            'date' => '31 October 2017'
        ],
        8 => [
            'product_id' => 8,
            'name' => 'Post 8',
            'author_name' => 'John Doe',
            'url' => 'post-8',
            'description' => 'Post 8 Description',
            'date' => '31 October 2018'
        ],
        9 => [
            'product_id' => 9,
            'name' => 'Post 9',
            'author_name' => 'John Doe',
            'url' => 'post-9',
            'description' => 'Post 9 Description',
            'date' => '31 October 2019'
        ],
    ];
}

function blogGetCategoryPost(int $categoryId): array
{
    $categories = blogGetCategory();
    if (!isset($categories[$categoryId])) {
        throw new InvalidArgumentException("Category with ID: $categoryId does not exist");
    }

    $postsForCategory = [];
    $posts = blogGetPost();

    foreach ($categories[$categoryId]['posts'] as $postId) {
        if (!isset($posts[$postId])) {
            throw new InvalidArgumentException("Post with ID: $postId from category: $categoryId does not exist");
        }
        $postsForCategory[] = $posts[$postId];
    }
    return $postsForCategory;
}

function blogGetCategoryByUrl(string $url): ?array
{
    $data = array_filter(
        blogGetCategory(),
        static function ($category) use ($url) {
            return $category['url'] === $url;
        }
    );

    return array_pop($data);
}

function blogGetPostByUrl(string $url): ?array
{
    $data = array_filter(
        blogGetPost(),
        static function ($post) use ($url) {
            return $post['url'] === $url;
        }
    );

    return array_pop($data);
}

function blogGetNewPost(string $date): ?array
{
    $recentPosts = array();

    foreach (blogGetPost() as $key => $val) {
        $timeInSeconds = round((((time() - strtotime($val[$date])) / 60) / 60) / 24);
        $val[$date] = $timeInSeconds;

        $recentPosts[$val[$date]] = $val;
        ksort($recentPosts);
    }
    array_splice($recentPosts, 3, count($recentPosts));

    return $recentPosts;
}
