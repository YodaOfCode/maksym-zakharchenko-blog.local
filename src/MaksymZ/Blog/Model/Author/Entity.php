<?php

declare(strict_types=1);

namespace MaksymZ\Blog\Model\Author;

class Entity
{
    private int $authorID;
    private string $authorUrl;
    private string $authorName;

    /**
     * @return int
     */
    public function getAuthorId(): int
    {
        return $this->authorID;
    }

    /**
     * @param int $authorID
     * @return Entity
     */
    public function setAuthorID(int $authorID): Entity
    {
        $this->authorID = $authorID;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorUrl(): string
    {
        return $this->authorUrl;
    }

    /**
     * @param string $authorUrl
     * @return Entity
     */
    public function setAuthorUrl(string $authorUrl): Entity
    {
        $this->authorUrl = $authorUrl;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthorName(): string
    {
        return $this->authorName;
    }

    /**
     * @param string $authorName
     * @return Entity
     */
    public function setAuthorName(string $authorName): Entity
    {
        $this->authorName = $authorName;
        return $this;
    }


}
