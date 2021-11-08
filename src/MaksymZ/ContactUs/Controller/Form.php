<?php

declare(strict_types=1);

namespace MaksymZ\ContactUs\Controller;

use MaksymZ\Framework\Http\ControllerInterface;
use MaksymZ\Framework\Http\Response\Raw;
use MaksymZ\Framework\View\Block;

class Form implements ControllerInterface
{
    private \MaksymZ\Framework\View\PageResponse $pageResponse;

    /**
     * @param \MaksymZ\Framework\View\PageResponse $pageResponse
     */
    public function __construct(
        \MaksymZ\Framework\View\PageResponse $pageResponse
    ) {
        $this->pageResponse = $pageResponse;
    }

    /**
     * @return Raw
     */
    public function execute(): Raw
    {
        return $this->pageResponse->setBody(
            Block::class,
            '../src/MaksymZ/ContactUs/view/contact-us.php'
        );
    }
}