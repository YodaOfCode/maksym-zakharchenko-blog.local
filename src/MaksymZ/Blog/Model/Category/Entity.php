<?php

declare(strict_types=1);

namespace MaksymZ\Blog\Model\Category;

class Entity
{
    private int $categoryId;
    private string $categoryName;
    private string $categoryUrl;
    private array $categoryPosts;

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    /**
     * @param int $categoryId
     * @return Entity
     */
    public function setCategoryId(int $categoryId): Entity
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryName(): string
    {
        return $this->categoryName;
    }

    /**
     * @param string $categoryName
     * @return Entity
     */
    public function setCategoryName(string $categoryName): Entity
    {
        $this->categoryName = $categoryName;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryUrl(): string
    {
        return $this->categoryUrl;
    }

    /**
     * @param string $categoryUrl
     * @return Entity
     */
    public function setCategoryUrl(string $categoryUrl): Entity
    {
        $this->categoryUrl = $categoryUrl;
        return $this;
    }

    /**
     * @return array
     */
    public function getCategoryPosts(): array
    {
        return $this->categoryPosts;
    }

    /**
     * @param array $categoryPosts
     * @return Entity
     */
    public function setCategoryPosts(array $categoryPosts): Entity
    {
        $this->categoryPosts = $categoryPosts;
        return $this;
    }
    /**
     * @return array
     */
    public function getPostIds(): array
    {
        return $this->categoryPosts;
    }

    /**
     * @param array $posts
     * @return $this
     */
    public function setPostsIds(array $posts): Entity
    {
        $this->categoryPosts = $posts;
        return $this;
    }

}
