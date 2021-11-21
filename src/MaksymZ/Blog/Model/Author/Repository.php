<?php

declare(strict_types=1);

namespace MaksymZ\Blog\Model\Author;

class Repository
{

    private \DI\FactoryInterface $factory;

    /**
     * @param \DI\FactoryInterface $factory
     */
    public function __construct(
        \DI\FactoryInterface $factory
    ) {
        $this->factory = $factory;
    }

    public function getAuthorsList(): array
    {
        return [
            1 => $this->makeEntity()
                ->setAuthorId(1)
                ->setAuthorName('Lol')
                ->setAuthorUrl('author-1'),
            2 => $this->makeEntity()
                ->setAuthorId(2)
                ->setAuthorName('Kek')
                ->setAuthorUrl('author-2'),
            3 => $this->makeEntity()
                ->setAuthorId(3)
                ->setAuthorName('Cheburek')
                ->setAuthorUrl('author-3'),
            4 => $this->makeEntity()
                ->setAuthorId(4)
                ->setAuthorName('Vasya')
                ->setAuthorUrl('author-4'),
            5 => $this->makeEntity()
                ->setAuthorId(5)
                ->setAuthorName('Petya')
                ->setAuthorUrl('author-5'),
            6 => $this->makeEntity()
                ->setAuthorId(6)
                ->setAuthorName('Grigory')
                ->setAuthorUrl('author-6'),
        ];
    }

    public function getByAuthorId(int $authorId): int
    {
        return $authorId;
    }

    /**
     * @param string $url
     * @return Entity|null
     */
    public function getByUrl(string $url): ?Entity
    {
        $data = array_filter(
            $this->getAuthorsList(),
            static function ($author) use ($url) {
                return $author->getAuthorUrl() === $url;
            }
        );
        return array_pop($data);
    }

    /**
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    private function makeEntity(): Entity
    {
        return $this->factory->make(Entity::class);
    }

    /**
     * @param int $authorId
     * @return string|null
     */
    public function getPostsByAuthorId(int $authorId): ?string
    {
        foreach ($this->getAuthorsList() as $author) {
            if ($author->getAuthorId() === $authorId) {
                return $author->getAuthorUrl();
            }
        }
        return null;
    }
}
