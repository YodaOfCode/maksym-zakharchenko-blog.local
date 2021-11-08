<?php

declare(strict_types=1);

namespace MaksymZ\Blog\Block;

use MaksymZ\Blog\Model\Author\Entity as AuthorEntity;

class Author extends \MaksymZ\Framework\View\Block
{
    protected string $template = '../src/MaksymZ/Blog/view/author.php';
    private \MaksymZ\Framework\Http\Request $request;
    private \MaksymZ\Blog\Model\Post\Repository $postRepository;

    /**
     * @param \MaksymZ\Framework\Http\Request $request
     * @param \MaksymZ\Blog\Model\Post\Repository $postRepository
     */
    public function __construct(
        \MaksymZ\Framework\Http\Request     $request,
        \MaksymZ\Blog\Model\Post\Repository $postRepository
    ) {
        $this->request = $request;
        $this->postRepository = $postRepository;
    }

    /**
     * @return AuthorEntity
     */
    public function getAuthor(): AuthorEntity
    {
        return $this->request->getParameter('author');
    }

    /**
     * @return array
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function getAuthorsPage(): array
    {
        $postsByThisAuthorArray = [];
        foreach ($this->postRepository->getList() as $post) {
            if ($post->getPostAuthorId() === $this->getAuthor()->getAuthorID()) {
                $postsByThisAuthorArray[] = $post;
            }
        }
        return $postsByThisAuthorArray;
    }
}
