<?php

declare(strict_types=1);

namespace MaksymZ\ContactUs;

use MaksymZ\ContactUs\Controller\Form;

class Router implements \MaksymZ\Framework\Http\RouterInterface
{
    /**
     * @inheritDoc
     */
    public function match(string $requestUrl): string
    {
        if ($requestUrl === 'contact-us') {
            return Form::class;
        }

        return '';
    }
}