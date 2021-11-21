<?php

declare(strict_types=1);

namespace MaksymZ\Blog\Model\Post;

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
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function getList(): array
    {
        return [
            1 => $this->makeEntity()
                ->setPostId(1)
                ->setPostTitle('Post 1')
                ->setPostAuthorId(1)
                ->setPostUrl('post-1')
                ->setPostDescription('Post 1 Description')
                ->setPostDate('31 October 2011'),
            2 => $this->makeEntity()
                ->setPostId(2)
                ->setPostTitle('Post 2')
                ->setPostAuthorId(2)
                ->setPostUrl('post-2')
                ->setPostDescription('Post 2 Description')
                ->setPostDate('31 October 2012'),
            3 => $this->makeEntity()
                ->setPostId(3)
                ->setPostTitle('Post 3')
                ->setPostAuthorId(3)
                ->setPostUrl('post-3')
                ->setPostDescription('Post 3 Description')
                ->setPostDate('31 October 2013'),
            4 => $this->makeEntity()
                ->setPostId(4)
                ->setPostTitle('Post 4')
                ->setPostAuthorId(4)
                ->setPostUrl('post-4')
                ->setPostDescription('Post 4 Description')
                ->setPostDate('31 October 2015'),
            5 => $this->makeEntity()
                ->setPostId(5)
                ->setPostTitle('Post 5')
                ->setPostAuthorId(5)
                ->setPostUrl('post-5')
                ->setPostDescription('Post 5 Description')
                ->setPostDate('31 October 2020'),
            6 => $this->makeEntity()
                ->setPostId(6)
                ->setPostTitle('Post 6')
                ->setPostAuthorId(6)
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
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function getByUrl(string $url): ?Entity
    {
        $data = array_filter(
            $this->getList(),
            static function ($post) use ($url) {
                return $post->getPostUrl() === $url;
            }
        );

        return array_pop($data);
    }

    /**
     * @param array $postIds
     * @return array
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function getByIds(array $postIds): array
    {
        return array_intersect_key(
            $this->getList(),
            array_flip($postIds)
        );
    }

    /**
     * @param int $authorId
     * @return int
     */
    public function getByAuthorId(int $authorId): int
    {
        return $authorId;
    }

    /**
     * @param $authorId
     * @return array
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function getPostsByAuthorId($authorId): array
    {
        $postsByThisAuthorArray = [];
        foreach ($this->getList() as $post) {
            if ($post->getPostAuthorId() === $authorId) {
                $postsByThisAuthorArray[] = $post;
            }
        }
        return $postsByThisAuthorArray;
    }
}
