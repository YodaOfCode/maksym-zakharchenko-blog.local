<?php

declare(strict_types=1);

namespace DVCampus\Blog\Model\Category;

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
     */
    public function getList(): array
    {
        return [
            1 => $this->makeEntity()
                ->setCategoryId(1)
                ->setCategoryName('Sport')
                ->setCategoryUrl('sport')
                ->setCategoryPosts([1, 2]),
            2 => $this->makeEntity()
                ->setCategoryId(2)
                ->setCategoryName('Politics')
                ->setCategoryUrl('politics')
                ->setCategoryPosts([3, 4]),
            3 => $this->makeEntity()
                ->setCategoryId(3)
                ->setCategoryName('IT')
                ->setCategoryUrl('it')
                ->setCategoryPosts([5, 6])
        ];
    }

    /**
     * @return Entity
     */
    private function makeEntity(): Entity
    {
        return $this->factory->make(Entity::class);
    }

    /**
     * @param string $url
     * @return ?Entity
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
}
