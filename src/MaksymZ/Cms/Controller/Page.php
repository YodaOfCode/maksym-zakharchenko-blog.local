<?php

namespace MaksymZ\Cms\Controller;

use MaksymZ\Framework\Http\Request;
use MaksymZ\Framework\Http\Response\Raw;
use MaksymZ\Framework\View\Block;

class Page implements \MaksymZ\Framework\Http\ControllerInterface
{
    private \MaksymZ\Framework\View\PageResponse $pageResponse;
    private \MaksymZ\Framework\Http\Request $request;

    /**
     * @param Request $request
     * @param \MaksymZ\Framework\View\PageResponse $pageResponse
     */
    public function __construct(
        \MaksymZ\Framework\Http\Request $request,
        \MaksymZ\Framework\View\PageResponse $pageResponse
    ) {
        $this->pageResponse = $pageResponse;
        $this->request = $request;
    }

    public function execute(): Raw
    {
        return $this->pageResponse->setBody(
            Block::class,
            '../src/MaksymZ/Cms/view/' . $this->request->getParameter('page') . '.php'
        );
    }
}
