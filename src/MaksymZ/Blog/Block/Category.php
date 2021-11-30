<?php

declare(strict_types=1);

namespace MaksymZ\Blog\Block;

use MaksymZ\Blog\Model\Category\Entity as CategoryEntity;
use MaksymZ\Blog\Model\Post\Entity as PostEntity;

class Category extends \MaksymZ\Framework\View\Block
{
    private \MaksymZ\Framework\Http\Request $request;
    private \MaksymZ\Blog\Model\Post\Repository $postRepository;

    protected string $template = '../src/MaksymZ/Blog/view/category.php';
    private \MaksymZ\Blog\Model\Author\Repository $authorRepository;

    /**
     * @param \MaksymZ\Framework\Http\Request $request
     * @param \MaksymZ\Blog\Model\Post\Repository $postRepository
     * @param \MaksymZ\Blog\Model\Author\Repository $authorRepository
     */
    public function __construct(
        \MaksymZ\Framework\Http\Request $request,
        \MaksymZ\Blog\Model\Post\Repository $postRepository,
        \MaksymZ\Blog\Model\Author\Repository $authorRepository
    ) {
        $this->request = $request;
        $this->postRepository = $postRepository;
        $this->authorRepository = $authorRepository;
    }

    /**
     * @return CategoryEntity
     */
    public function getCategory(): CategoryEntity
    {
        return $this->request->getParameter('category');
    }

    /**
     * @return PostEntity[]
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function getCategoryPosts(): array
    {
        return $this->postRepository->getByIds(
            $this->getCategory()->getPostIds()
        );
    }

    public function getAuthorById($authorId): string
    {
        return $this->authorRepository->getAuthorById($authorId);
    }
}
