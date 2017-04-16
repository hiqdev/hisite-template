<?php

if (!defined('WEBAPP_ROOT_DIR')) {
    define('WEBAPP_ROOT_DIR', dirname(dirname(__DIR__)));
}

$bootstrap = WEBAPP_ROOT_DIR . '/vendor/hiqdev/hidev-webapp/src/bootstrap.php';

if (!file_exists($bootstrap)) {
    fwrite(STDERR, "Run composer to set up dependencies!\n");
    exit(1);
}

require_once $bootstrap;
