<?php

namespace DVCampus\Blog\Controller;

use DVCampus\Framework\Http\ControllerInterface;

class Post implements ControllerInterface
{
    private \DVCampus\Framework\Http\Request $request;

    /**
     * @param \DVCampus\Framework\Http\Request $request
     */
    public function __construct(
        \DVCampus\Framework\Http\Request $request
    ) {
        $this->request = $request;
    }

    public function execute(): string
    {
        $data = $this->request->getParameter('post');
        $page = 'post.php';

        ob_start();
        require_once "../src/page.php";
        return ob_get_clean();
    }
}
