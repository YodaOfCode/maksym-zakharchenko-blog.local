<?php

declare(strict_types=1);

namespace DVCampus\Blog\Model\Author;

class Entity
{
    private int $author_id;

    /**
     * @return int
     */
    public function getAuthorId(): int
    {
        return $this->author_id;
    }

    /**
     * @param int $author_id
     * @return Entity
     */
    public function setAuthorId(int $author_id): Entity
    {
        $this->author_id = $author_id;
        return $this;
    }
}
