<?php

declare(strict_types=1);

namespace MaksymZ\Blog\Block;

use MaksymZ\Blog\Model\Post\Entity as PostEntity;

class Post extends \MaksymZ\Framework\View\Block
{
    private \MaksymZ\Framework\Http\Request $request;

    protected string $template = '../src/MaksymZ/Blog/view/post.php';
    private \MaksymZ\Blog\Model\Author\Repository $authorRepository;

    /**
     * @param \MaksymZ\Framework\Http\Request $request
     * @param \MaksymZ\Blog\Model\Author\Repository $authorRepository
     */
    public function __construct(
        \MaksymZ\Framework\Http\Request $request,
        \MaksymZ\Blog\Model\Author\Repository $authorRepository
    ) {
        $this->request = $request;
        $this->authorRepository = $authorRepository;
    }

    /**
     * @return PostEntity
     */
    public function getPost(): PostEntity
    {
        return $this->request->getParameter('post');
    }

    /**
     * @param int $authorId
     * @return string|null
     */
    public function getAuthorById(int $authorId): ?string
    {
        return $this->authorRepository->getAuthorById($authorId);
    }
}
