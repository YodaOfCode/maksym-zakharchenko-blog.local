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
    private Model\Category\Repository $categoryRepository;

    /**
     * @param Request $request
     * @param Model\Category\Repository $categoryRepository
     */
    public function __construct(
        Request $request,
        \DVCampus\Blog\Model\Category\Repository $categoryRepository
    ) {
        $this->request = $request;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        require_once '../src/data.php';

        if ($category = $this->categoryRepository->getByUrl($requestUrl)) {
            $this->request->setParameter('category', $category);
            return Category::class;
        }

        if ($data = blogGetPostByUrl($requestUrl)) {
            $this->request->setParameter('post', $data);
            return Post::class;
        }
        return '';
    }
}