<?php

define('APP_DIR', dirname(__DIR__) . '/app/');

$settings = [
    'database' => [
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'username'    => 'root',
        'password'    => '',
        'dbname'      => 'test',
    ],
    'application' => [
        'controllersDir' => APP_DIR . 'controllers/',
        'modelsDir'      => APP_DIR . 'models/',
        'viewsDir'       => APP_DIR . 'views/',
        'pluginsDir'     => APP_DIR . 'plugins/',
        'libraryDir'     => APP_DIR . 'library/',
        'cacheDir'       => APP_DIR . 'cache/',
        'baseUri'        => '/tutorial/',
    ]
];

$config = new Phalcon\Config($settings);

// オートローダにディレクトリを登録する
$loader = new Phalcon\Loader();
$loader->registerDirs(
    [
        "../app/controllers/",
        "../app/models/",
    ]
);

