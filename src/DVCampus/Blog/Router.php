<?php

declare(strict_types=1);

namespace DVCampus\Blog;

use DVCampus\Blog\Controller\Category;
use DVCampus\Blog\Controller\Post;
use DVCampus\Framework\Http\Request;
use DVCampus\Framework\Http\RouterInterface;

class Router implements RouterInterface
{
    /**
     * @var Request
     */
    private Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        require_once '../src/data.php';

        if ($data = blogGetCategoryByUrl($requestUrl)) {
            $this->request->setParameter('category', $data);
            return Category::class;
        }

        if ($data = blogGetPostByUrl($requestUrl)) {
            $this->request->setParameter('post', $data);
            return Post::class;
        }
        return '';
    }
}