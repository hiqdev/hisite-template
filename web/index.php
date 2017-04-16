<?php

require __DIR__ . '/../src/config/bootstrap.php';

$config = require \hiqdev\composer\config\Builder::path('hisite');

(new \yii\web\Application($config))->run();
