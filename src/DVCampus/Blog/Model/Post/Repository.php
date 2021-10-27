<?php

declare(strict_types=1);

namespace DVCampus\Blog\Model\Post;

class Repository
{
    /**
     * @var \DI\FactoryInterface
     */
    private \DI\FactoryInterface $factory;

    public function __construct(
        \DI\FactoryInterface $factory
    ) {
        $this->factory = $factory;
    }

    /**
     * @return Entity[]
     */
    public function getList(): array
    {
        return [
            1 => $this->makeEntity()
                ->setPostIds(1)
                ->setPostName('Post 1')
                ->setPostAuthorName('John Doe')
                ->setPostUrl('post-1')
                ->setPostDescription('Post 1 Description')
                ->setPostDate('31 October 2011'),
            2 => $this->makeEntity()
                ->setPostIds(2)
                ->setPostName('Post 2')
                ->setPostAuthorName('John Doe')
                ->setPostUrl('post-2')
                ->setPostDescription('Post 2 Description')
                ->setPostDate('31 October 2012'),
            3 => $this->makeEntity()
                ->setPostIds(3)
                ->setPostName('Post 3')
                ->setPostAuthorName('John Doe')
                ->setPostUrl('post-3')
                ->setPostDescription('Post 3 Description')
                ->setPostDate('31 October 2013'),
            4 => $this->makeEntity()
                ->setPostIds(4)
                ->setPostName('Post 4')
                ->setPostAuthorName('John Doe')
                ->setPostUrl('post-4')
                ->setPostDescription('Post 4 Description')
                ->setPostDate('31 October 2015'),
            5 => $this->makeEntity()
                ->setPostIds(5)
                ->setPostName('Post 5')
                ->setPostAuthorName('John Doe')
                ->setPostUrl('post-5')
                ->setPostDescription('Post 5 Description')
                ->setPostDate('31 October 2020'),
            6 => $this->makeEntity()
                ->setPostIds(6)
                ->setPostName('Post 6')
                ->setPostAuthorName('John Doe')
                ->setPostUrl('post-6')
                ->setPostDescription('Post 6 Description')
                ->setPostDate('31 October 2016')
        ];
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

    /**
     * @param string $url
     * @return ?Entity
     */
    public function getByUrl(string $url): ?Entity
    {
        $data = array_filter(
            $this->getList(),
            static function ($category) use ($url) {
                return $category->getPostUrl() === $url;
            }
        );

        return array_pop($data);
    }

    /**
     * @param array $postIds
     * @return array
     */
    public function getByIds(array $postIds): array
    {
        return array_intersect_key(
            $this->getList(),
            array_flip($postIds)
        );
    }
}
