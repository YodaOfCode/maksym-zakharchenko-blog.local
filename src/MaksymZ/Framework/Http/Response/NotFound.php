<?php

declare(strict_types=1);

namespace MaksymZ\Framework\Http\Response;

class NotFound extends Raw
{
    public function send(): void
    {
        $this->setHeaders('HTTP/1.0 404 Not Found');
        parent::send();
    }
}
