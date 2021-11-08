<?php

declare(strict_types=1);

namespace MaksymZ\Blog;

use MaksymZ\Blog\Controller\Author;
use MaksymZ\Blog\Controller\Category;
use MaksymZ\Blog\Controller\Post;

class Router implements \MaksymZ\Framework\Http\RouterInterface
{
    private \MaksymZ\Framework\Http\Request $request;
    private Model\Category\Repository $categoryRepository;
    private Model\Post\Repository $postRepository;
    private Model\Author\Repository $authorRepository;

    /**
     * @param \MaksymZ\Framework\Http\Request $request
     * @param Model\Category\Repository $categoryRepository
     * @param Model\Post\Repository $postRepository
     * @param Model\Author\Repository $authorRepository
     */
    public function __construct(
        \MaksymZ\Framework\Http\Request $request,
        \MaksymZ\Blog\Model\Category\Repository $categoryRepository,
        \MaksymZ\Blog\Model\Post\Repository $postRepository,
        \MaksymZ\Blog\Model\Author\Repository $authorRepository
    ) {
        $this->request = $request;
        $this->categoryRepository = $categoryRepository;
        $this->postRepository = $postRepository;
        $this->authorRepository = $authorRepository;
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

        if ($author = $this->authorRepository->getByUrl($requestUrl)) {
            $this->request->setParameter('author', $author);
            return Author::class;
        }
        return '';
    }
}
