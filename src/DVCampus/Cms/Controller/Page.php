<?php

namespace DVCampus\Cms\Controller;

use DVCampus\Framework\Http\Request;
use DVCampus\Framework\Http\Response\Raw;
use DVCampus\Framework\View\Block;

class Page implements \DVCampus\Framework\Http\ControllerInterface
{
    private \DVCampus\Framework\View\PageResponse $pageResponse;
    private \DVCampus\Framework\Http\Request $request;

    /**
     * @param Request $request
     * @param \DVCampus\Framework\View\PageResponse $pageResponse
     */
    public function __construct(
        \DVCampus\Framework\Http\Request $request,
        \DVCampus\Framework\View\PageResponse $pageResponse
    ) {
        $this->pageResponse = $pageResponse;
        $this->request = $request;
    }

    public function execute(): Raw
    {
        return $this->pageResponse->setBody(
            Block::class,
            '../src/DVCampus/Cms/view/' . $this->request->getParameter('page') . '.php'
        );
    }
}
