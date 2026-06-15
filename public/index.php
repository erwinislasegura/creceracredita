<?php
declare(strict_types=1);

require_once __DIR__.'/../app/Core/bootstrap.php';

$router = require __DIR__.'/../routes/web.php';
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?: '/';
$basePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '')), '/');

if ($basePath !== '' && $basePath !== '/' && str_starts_with($uri, $basePath)) {
    $uri = substr($uri, strlen($basePath)) ?: '/';
}

$router->dispatch($_SERVER['REQUEST_METHOD'], $uri);
