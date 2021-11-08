<?php

declare(strict_types=1);

namespace MaksymZ\Blog\Model\Post;

class Entity
{

    private int $postId;
    private string $postTitle;
    private int $postAuthorId;
    private string $postUrl;
    private string $postDescription;
    private string $postDate;

    /**
     * @return int
     */
    public function getPostId(): int
    {
        return $this->postId;
    }

    /**
     * @param int $postId
     * @return Entity
     */
    public function setPostId(int $postId): Entity
    {
        $this->postId = $postId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostTitle(): string
    {
        return $this->postTitle;
    }

    /**
     * @param string $postTitle
     * @return Entity
     */
    public function setPostTitle(string $postTitle): Entity
    {
        $this->postTitle = $postTitle;
        return $this;
    }

    /**
     * @return int
     */
    public function getPostAuthorId(): int
    {
        return $this->postAuthorId;
    }

    /**
     * @param int $postAuthorId
     * @return Entity
     */
    public function setPostAuthorId(int $postAuthorId): Entity
    {
        $this->postAuthorId = $postAuthorId;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostUrl(): string
    {
        return $this->postUrl;
    }

    /**
     * @param string $postUrl
     * @return Entity
     */
    public function setPostUrl(string $postUrl): Entity
    {
        $this->postUrl = $postUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostDescription(): string
    {
        return $this->postDescription;
    }

    /**
     * @param string $postDescription
     * @return Entity
     */
    public function setPostDescription(string $postDescription): Entity
    {
        $this->postDescription = $postDescription;
        return $this;
    }

    /**
     * @return string
     */
    public function getPostDate(): string
    {
        return $this->postDate;
    }

    /**
     * @param string $postDate
     * @return Entity
     */
    public function setPostDate(string $postDate): Entity
    {
        $this->postDate = $postDate;
        return $this;
    }
}
