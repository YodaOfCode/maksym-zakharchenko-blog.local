<?php

declare(strict_types=1);

use MaksymZ\Framework\Database\Adapter\MySQL;

return [
    \MaksymZ\Framework\Database\Adapter\AdapterInterface::class => DI\get(
        MySQL::class
    ),
    MySQL::class => DI\autowire()->constructorParameter(
        'connectionParams',
        [
            MySQL::DB_NAME     => 'maksym_zakharchenko_blog',
            MySQL::DB_USER     => 'maksym_zakharchenko_blog_user',
            MySQL::DB_PASSWORD => '45Ya!$""sT&P*C%RNSEhr',
            MySQL::DB_HOST     => 'mysql',
            MySQL::DB_PORT     => '3306'
        ]
    ),
    \MaksymZ\Framework\Http\RequestDispatcher::class => DI\autowire()->constructorParameter(
        'routers',
        [
            \DI\get(\MaksymZ\Cms\Router::class),
            \DI\get(\MaksymZ\Blog\Router::class),
            \DI\get(\MaksymZ\ContactUs\Router::class),
            \DI\get(\MaksymZ\Install\Router::class),
        ]
    )
];
