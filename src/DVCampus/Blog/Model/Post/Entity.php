<?php

declare(strict_types=1);

namespace DVCampus\Blog\Model\Post;

class Entity
{

    private int $post_id;
    private string $post_name;
    private string $post_author_name;
    private string $post_url;
    private string $post_description;
    private string $post_date;

    /**
     * @return int
     */
    public function getPostIds(): int
    {
        return $this->post_id;
    }

    /**
     * @param int $post_id
     * @return Entity
     */
    public function setPostIds(int $post_id): Entity
    {
        $this->post_id = $post_id;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostName(): string
    {
        return $this->post_name;
    }

    /**
     * @param string $post_name
     * @return Entity
     */
    public function setPostName(string $post_name): Entity
    {
        $this->post_name = $post_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostAuthorName(): string
    {
        return $this->post_author_name;
    }

    /**
     * @param string $post_author_name
     * @return Entity
     */
    public function setPostAuthorName(string $post_author_name): Entity
    {
        $this->post_author_name = $post_author_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostUrl(): string
    {
        return $this->post_url;
    }

    /**
     * @param string $post_url
     * @return Entity
     */
    public function setPostUrl(string $post_url): Entity
    {
        $this->post_url = $post_url;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostDescription(): string
    {
        return $this->post_description;
    }

    /**
     * @param string $post_description
     * @return Entity
     */
    public function setPostDescription(string $post_description): Entity
    {
        $this->post_description = $post_description;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostDate(): string
    {
        return $this->post_date;
    }

    /**
     * @param string $post_date
     * @return Entity
     */
    public function setPostDate(string $post_date): Entity
    {
        $this->post_date = $post_date;
        return $this;
    }
}
