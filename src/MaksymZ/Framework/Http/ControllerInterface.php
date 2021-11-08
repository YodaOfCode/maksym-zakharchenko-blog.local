<?php

declare(strict_types=1);

namespace MaksymZ\Framework\Http;

use MaksymZ\Framework\Http\Response\Raw;

interface ControllerInterface
{
    public function execute(): Raw;
}
