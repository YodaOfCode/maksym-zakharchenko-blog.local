<?php

declare(strict_types=1);

namespace DVCampus\Blog;

use DVCampus\Blog\Controller\Category;
use DVCampus\Blog\Controller\Post;

class Router implements \DVCampus\Framework\Http\RouterInterface
{
    private \DVCampus\Framework\Http\Request $request;
    private Model\Category\Repository $categoryRepository;
    private Model\Post\Repository $postRepository;

    /**
     * @param \DVCampus\Framework\Http\Request $request
     * @param Model\Category\Repository $categoryRepository
     * @param Model\Post\Repository $postRepository
     */
    public function __construct(
        \DVCampus\Framework\Http\Request $request,
        \DVCampus\Blog\Model\Category\Repository $categoryRepository,
        \DVCampus\Blog\Model\Post\Repository $postRepository
    ) {
        $this->request = $request;
        $this->categoryRepository = $categoryRepository;
        $this->postRepository = $postRepository;
    }

    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {

        if ($category = $this->categoryRepository->getByUrl($requestUrl)) {
            $this->request->setParameter('category', $category);
            return Category::class;
        }

        if ($post = $this->postRepository->getByUrl($requestUrl)) {
            $this->request->setParameter('post', $post);
            return Post::class;
        }
        return '';
    }
}