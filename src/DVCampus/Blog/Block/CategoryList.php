<?php

declare(strict_types=1);

namespace DVCampus\Blog\Block;

use DVCampus\Blog\Model\Category\Entity as CategoryEntity;

class CategoryList extends \DVCampus\Framework\View\Block
{
    private \DVCampus\Blog\Model\Category\Repository $categoryRepository;

    protected string $template = '../src/DVCampus/Blog/view/category_list.php';

    /**
     * @param \DVCampus\Blog\Model\Category\Repository $categoryRepository
     */
    public function __construct(\DVCampus\Blog\Model\Category\Repository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @return CategoryEntity[]
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function getCategories(): array
    {
        return $this->categoryRepository->getList();
    }
}
