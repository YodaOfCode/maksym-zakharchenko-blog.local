<?php

declare(strict_types=1);

namespace DVCampus\Blog\Block;

use DVCampus\Blog\Model\Category\Entity as CategoryEntity;
use DVCampus\Blog\Model\Post\Entity as PostEntity;

class Category extends \DVCampus\Framework\View\Block
{
    private \DVCampus\Framework\Http\Request $request;
    private \DVCampus\Blog\Model\Post\Repository $postRepository;

    protected string $template = '../src/DVCampus/Blog/view/category.php';
    private \DVCampus\Blog\Model\Author\Repository $authorRepository;

    /**
     * @param \DVCampus\Framework\Http\Request $request
     * @param \DVCampus\Blog\Model\Post\Repository $postRepository
     * @param \DVCampus\Blog\Model\Author\Repository $authorRepository
     */
    public function __construct(
        \DVCampus\Framework\Http\Request $request,
        \DVCampus\Blog\Model\Post\Repository $postRepository,
        \DVCampus\Blog\Model\Author\Repository $authorRepository
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

    /**
     * @param int $authorId
     * @return int
     */
    public function getAuthorId(int $authorId): int
    {
        return $this->authorRepository->getByAuthorId($authorId);
    }
}
