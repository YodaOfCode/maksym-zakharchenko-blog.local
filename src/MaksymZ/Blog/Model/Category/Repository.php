<?php

declare(strict_types=1);

namespace MaksymZ\Blog\Model\Category;

class Repository
{
    private \DI\FactoryInterface $factory;

    /**
     * @param \DI\FactoryInterface $factory
     */
    public function __construct(\DI\FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    /**
     * @return Entity[]
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function getList(): array
    {
        return [
            1 => $this->makeEntity()
                ->setCategoryId(1)
                ->setCategoryName('Sport')
                ->setCategoryUrl('sport')
                ->setPostsIds([1, 2]),
            2 => $this->makeEntity()
                ->setCategoryId(2)
                ->setCategoryName('Politics')
                ->setCategoryUrl('politics')
                ->setPostsIds([3, 4]),
            3 => $this->makeEntity()
                ->setCategoryId(3)
                ->setCategoryName('IT')
                ->setCategoryUrl('it')
                ->setPostsIds([5, 6])
        ];
    }

    /**
     * @param string $url
     * @return ?Entity
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function getByUrl(string $url): ?Entity
    {
        $data = array_filter(
            $this->getList(),
            static function ($category) use ($url) {
                return $category->getCategoryUrl() === $url;
            }
        );

        return array_pop($data);
    }

    /**
     * @return Entity
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    private function makeEntity(): Entity
    {
        return $this->factory->make(Entity::class);
    }
}
