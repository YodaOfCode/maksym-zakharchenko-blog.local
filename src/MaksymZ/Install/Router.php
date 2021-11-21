<?php

declare(strict_types=1);

namespace MaksymZ\Install;

use MaksymZ\Install\Controller\Index;

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
        if ($this->request->getRequestUrl() === 'install') {
            return Index::class;
        }

        return '';
    }
}