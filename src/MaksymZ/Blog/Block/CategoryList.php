<?php

declare(strict_types=1);

namespace MaksymZ\Blog\Block;

use MaksymZ\Blog\Model\Category\Entity as CategoryEntity;

class CategoryList extends \MaksymZ\Framework\View\Block
{
    private \MaksymZ\Blog\Model\Category\Repository $categoryRepository;

    protected string $template = '../src/MaksymZ/Blog/view/category_list.php';

    /**
     * @param \MaksymZ\Blog\Model\Category\Repository $categoryRepository
     */
    public function __construct(\MaksymZ\Blog\Model\Category\Repository $categoryRepository)
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
