<?php

declare(strict_types=1);

return [
    \MaksymZ\Framework\Http\RequestDispatcher::class => DI\autowire()->constructorParameter(
        'routers',
        [
            DI\get(\MaksymZ\Cms\Router::class),
            DI\get(\MaksymZ\Blog\Router::class),
            DI\get(\MaksymZ\ContactUs\Router::class)
        ]
    )
];
