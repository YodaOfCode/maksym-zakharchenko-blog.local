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
     * @return array
     * @throws \DI\DependencyException
     * @throws \DI\NotFoundException
     */
    public function getPosts(): array
    {
        return $this->postRepository->getList();
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
     * @return array
     */
    public function newPosts(array $posts): ?array
    {
        $recentPosts = array();
        foreach ($posts as $val) {
            $timeInDays = round((((time() - strtotime($val->getPostDate())) / 60) / 60) / 24);
            $myArray = $val->setPostDate((string)$timeInDays);
            $recentPosts[$val->getPostDate()] = $myArray;
            ksort($recentPosts);
        }

        array_splice($recentPosts, 3, count($recentPosts));
        return $recentPosts;
    }
}
