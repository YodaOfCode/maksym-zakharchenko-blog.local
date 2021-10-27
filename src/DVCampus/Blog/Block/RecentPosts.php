<?php

declare(strict_types=1);

namespace DVCampus\Blog\Block;

class RecentPosts extends \DVCampus\Framework\View\Block
{
    private \DVCampus\Blog\Model\Post\Repository $postRepository;

    protected string $template = '../src/DVCampus/Blog/view/recent_posts.php';

    /**
     * @param \DVCampus\Blog\Model\Post\Repository $postRepository
     */
    public function __construct(
        \DVCampus\Blog\Model\Post\Repository $postRepository
    ) {
        $this->postRepository = $postRepository;
    }

    public function getPosts(): array
    {
        return $this->postRepository->getList();
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
