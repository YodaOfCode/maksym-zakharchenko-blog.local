<?php

declare(strict_types=1);

namespace DVCampus\Blog\Block;

use DVCampus\Blog\Model\Post\Entity as PostEntity;

class Post extends \DVCampus\Framework\View\Block
{
    private \DVCampus\Framework\Http\Request $request;

    protected string $template = '../src/DVCampus/Blog/view/post.php';
    private \DVCampus\Blog\Model\Author\Repository $authorRepository;

    /**
     * @param \DVCampus\Framework\Http\Request $request
     * @param \DVCampus\Blog\Model\Author\Repository $authorRepository
     */
    public function __construct(
        \DVCampus\Framework\Http\Request $request,
        \DVCampus\Blog\Model\Author\Repository $authorRepository
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
}
