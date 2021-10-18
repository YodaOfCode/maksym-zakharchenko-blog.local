<?php

namespace DVCampus\Cms\Controller;

use DVCampus\Framework\Http\ControllerInterface;

class Page implements ControllerInterface
{
    public function execute(): string
    {
        $page = 'home.php';

        ob_start();
        require_once "../src/page.php";
        return ob_get_clean();
    }
}