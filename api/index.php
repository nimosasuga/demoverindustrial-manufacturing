<?php

// Prepare serverless writable directories in /tmp
$dirs = [
    '/tmp/views',
    '/tmp/storage',
    '/tmp/storage/app',
    '/tmp/storage/app/public',
    '/tmp/storage/framework',
    '/tmp/storage/framework/views',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/logs',
];

foreach ($dirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// Copy pre-seeded sqlite database to /tmp if not yet copied in this container
$sqliteSource = __DIR__ . '/../database/database.sqlite';
$sqliteDest = '/tmp/database.sqlite';
if (file_exists($sqliteSource) && !file_exists($sqliteDest)) {
    @copy($sqliteSource, $sqliteDest);
}

// Forward execution to Laravel public entrypoint
require __DIR__ . '/../public/index.php';
