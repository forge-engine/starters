<?php

return [
    "registry" => [
        [
            "name" => "kernel-module-registry",
            "type" => "git",
            "url" => "https://github.com/forge-kernel/kernel-module-registry",
            "branch" => "main",
            "private" => false,
            "personal_token" => env("GITHUB_TOKEN"),
            "description" => "Forge Kernel Official Modules",
        ],
    ],
    "cache_ttl" => 3600,
];
