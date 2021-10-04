<?php

declare(strict_types=1);

function catalogGetCategory(): array
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

function catalogGetProduct(): array
{
    return [
        1 => [
            'product_id' => 1,
            'name' => 'Post 1',
            'url' => 'Post-1',
            'description' => 'Post 1 Description',
            'date' => '31.10.2011'
        ],
        2 => [
            'product_id' => 2,
            'name' => 'Post 2',
            'url' => 'Post-2',
            'description' => 'Post 2 Description',
            'date' => '31.10.2012'
        ],
        3 => [
            'product_id' => 3,
            'name' => 'Post 3',
            'url' => 'Post-3',
            'description' => 'Post 3 Description',
            'date' => '31.10.2013'
        ],
        4 => [
            'product_id' => 4,
            'name' => 'Post 4',
            'url' => 'Post-4',
            'description' => 'Post 4 Description',
            'date' => '31.10.2014'
        ],
        5 => [
            'product_id' => 5,
            'name' => 'Post 5',
            'url' => 'Post-5',
            'description' => 'Post 5 Description',
            'date' => '31.10.2015'
        ],
        6 => [
            'product_id' => 6,
            'name' => 'Post 6',
            'url' => 'Post-6',
            'description' => 'Post 6 Description',
            'date' => '31.10.2016'
        ]
    ];
}
