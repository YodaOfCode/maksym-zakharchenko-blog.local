<?php

declare(strict_types=1);

namespace DVCampus\Blog\Model\Category;

class Entity
{
    private int $category_id;
    private string $category_name;
    private string $category_url;
    private array $category_posts;

    /**
     * @return int
     */
    public function getCategoryId(): int
    {
        return $this->category_id;
    }

    /**
     * @param int $category_id
     * @return $this
     */
    public function setCategoryId(int $category_id): Entity
    {
        $this->category_id = $category_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryName(): string
    {
        return $this->category_name;
    }

    /**
     * @param string $category_name
     * @return $this
     */
    public function setCategoryName(string $category_name): Entity
    {
        $this->category_name = $category_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategoryUrl(): string
    {
        return $this->category_url;
    }

    /**
     * @param string $category_url
     * @return $this
     */
    public function setCategoryUrl(string $category_url): Entity
    {
        $this->category_url = $category_url;
        return $this;
    }

    /**
     * @return array
     */
    public function getCategoryPosts(): array
    {
        return $this->category_posts;
    }

    /**
     * @param array $category_posts
     * @return $this
     */
    public function setCategoryPosts(array $category_posts): Entity
    {
        $this->category_posts = $category_posts;
        return $this;
    }
}
