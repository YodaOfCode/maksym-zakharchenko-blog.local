<?php

declare(strict_types=1);

namespace DVCampus\Cms;

use DVCampus\Cms\Controller\Page;
use DVCampus\Framework\Http\RouterInterface;

class Router implements RouterInterface
{
    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        if ($requestUrl === '') {
            return Page::class;
        }
        return '';
    }
}