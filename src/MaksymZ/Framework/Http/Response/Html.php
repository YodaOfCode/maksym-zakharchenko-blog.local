<?php

declare(strict_types=1);

namespace MaksymZ\Framework\Http\Response;

class Html extends Raw
{
    public function send(): void
    {
        $this->setHeaders('Content-Type: text/html; charset=utf-8');
        parent::send();
    }
}
