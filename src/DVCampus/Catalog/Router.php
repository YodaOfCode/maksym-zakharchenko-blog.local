<?php

declare(strict_types=1);

namespace DVCampus\Catalog;

use DVCampus\Framework\Http\RouterInterface;

class Router implements RouterInterface
{
    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        require_once '../src/data.php';

        if ($data = catalogGetCategoryByUrl($requestUrl)) {
            return Category::class;
        }

        if ($data = catalogGetProductByUrl($requestUrl)) {
            return Product::class;
        }
    }
}