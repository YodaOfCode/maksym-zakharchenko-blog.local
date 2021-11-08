<?php

declare(strict_types=1);

namespace MaksymZ\Cms;

use MaksymZ\Cms\Controller\Page;

class Router implements \MaksymZ\Framework\Http\RouterInterface
{
    private \MaksymZ\Framework\Http\Request $request;

    /**
     * @param \MaksymZ\Framework\Http\Request $request
     */
    public function __construct(
        \MaksymZ\Framework\Http\Request $request
    ) {
        $this->request = $request;
    }

    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        $cmsPage = [
            '',
            'test-page',
            'test-page-2'
        ];

        if (in_array($requestUrl, $cmsPage)) {
            $this->request->setParameter('page', $requestUrl ?: 'home');

            return Page::class;
        }

        return '';
    }
}