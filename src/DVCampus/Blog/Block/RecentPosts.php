<?php

declare(strict_types=1);

namespace DVCampus\Blog\Block;

class RecentPosts extends \DVCampus\Framework\View\Block
{
    private \DVCampus\Blog\Model\Post\Repository $postRepository;

    protected string $template = '../src/DVCampus/Blog/view/recent_posts.php';
    private \DVCampus\Blog\Model\Author\Repository $authorRepository;

    /**
     * @param \DVCampus\Blog\Model\Post\Repository $postRepository
     * @param \DVCampus\Blog\Model\Author\Repository $authorRepository
     */
    public function __construct(
        \DVCampus\Blog\Model\Post\Repository $postRepository,
        \DVCampus\Blog\Model\Author\Repository $authorRepository
    ) {
        $this->postRepository = $postRepository;
        $this->authorRepository = $authorRepository;
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
     * @param string $str
     * @return string
     */
    public function getAuthorsUrl(string $str): string
    {
        return $str;
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
