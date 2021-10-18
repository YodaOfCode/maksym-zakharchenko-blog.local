<?php

declare(strict_types=1);

return [
    \DVCampus\Framework\Http\RequestDispatcher::class => DI\autowire()->constructorParameter(
        'routers',
        [
            DI\get(\DVCampus\Cms\Router::class),
            DI\get(\DVCampus\Blog\Router::class),
            DI\get(\DVCampus\ContactUs\Router::class)
        ]
    )
];
