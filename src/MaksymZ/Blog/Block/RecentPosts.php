<?php

declare(strict_types=1);

namespace MaksymZ\Blog\Block;

class RecentPosts extends \MaksymZ\Framework\View\Block
{
    private \MaksymZ\Blog\Model\Post\Repository $postRepository;

    protected string $template = '../src/MaksymZ/Blog/view/recent_posts.php';

    /**
     * @param \MaksymZ\Blog\Model\Post\Repository $postRepository
     */
    public function __construct(
        \MaksymZ\Blog\Model\Post\Repository $postRepository
    ) {
        $this->postRepository = $postRepository;
    }

    /**
     * @param string $url
     * @return string
     */
    public function getAuthorsUrl(string $url): string
    {
        return $url;
    }

    /**
     * @return array|null
     */
    public function newPosts(): ?array
    {
        return $this->postRepository->newPosts();
    }
}
