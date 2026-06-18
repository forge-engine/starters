<?php

return [
    "global" => [
        \App\Modules\ForgeRouter\Http\Middlewares\CorsMiddleware::class,
        \App\Modules\ForgeRouter\Http\Middlewares\SanitizeInputMiddleware::class,
        \App\Modules\ForgeRouter\Http\Middlewares\CompressionMiddleware::class,
    ],
    "web" => [
        \App\Modules\ForgeRouter\Http\Middlewares\SessionMiddleware::class,
        \App\Modules\ForgeRouter\Http\Middlewares\CsrfMiddleware::class,
        \App\Modules\ForgeRouter\Http\Middlewares\RelaxSecurityHeadersMiddleware::class,
    ],
    "api" => [
        \App\Modules\ForgeRouter\Http\Middlewares\IpWhiteListMiddleware::class,
        \App\Modules\ForgeRouter\Http\Middlewares\ApiKeyMiddleware::class,
        \App\Modules\ForgeRouter\Http\Middlewares\CookieMiddleware::class,
    ],
];
