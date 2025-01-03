<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'App\\App' => $baseDir . '/app/App.php',
    'App\\Controllers\\DashboardController' => $baseDir . '/app/controllers/DashboardController.php',
    'App\\Controllers\\PostsController' => $baseDir . '/app/controllers/PostsController.php',
    'App\\Models\\Post' => $baseDir . '/app/models/Post.php',
    'App\\Request' => $baseDir . '/app/Request.php',
    'App\\Router' => $baseDir . '/app/Router.php',
    'ComposerAutoloaderInitd751713988987e9331980363e24189ce' => $vendorDir . '/composer/autoload_real.php',
    'Composer\\Autoload\\ClassLoader' => $vendorDir . '/composer/ClassLoader.php',
    'Composer\\Autoload\\ComposerStaticInitd751713988987e9331980363e24189ce' => $vendorDir . '/composer/autoload_static.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'CreatePostsTable' => $baseDir . '/database/migrations/CreatePostsTable.php',
    'CreateUserTable' => $baseDir . '/database/migrations/CreateUser.php',
    'database\\Connection' => $baseDir . '/database/Connection.php',
);
