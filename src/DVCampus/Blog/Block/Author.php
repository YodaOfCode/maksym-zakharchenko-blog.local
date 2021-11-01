<?php

declare(strict_types=1);

namespace DVCampus\Blog\Block;

class Author extends \DVCampus\Framework\View\Block
{
    protected string $template = '../src/DVCampus/Blog/view/author.php';
    private \DVCampus\Framework\Http\Request $request;
    private \DVCampus\Blog\Model\Post\Repository $postRepository;

    /**
     * @param \DVCampus\Framework\Http\Request $request
     * @param \DVCampus\Blog\Model\Post\Repository $postRepository
     */
    public function __construct(
        \DVCampus\Framework\Http\Request     $request,
        \DVCampus\Blog\Model\Post\Repository $postRepository
    ) {
        $this->request = $request;
        $this->postRepository = $postRepository;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->request->getRequestUrl();
    }

    /**
     * @param string $authorId
     * @return array
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function getPostsByAuthor(string $authorId): array
    {
        return $this->postRepository->getByAuthorId((int)$authorId);
    }
}
