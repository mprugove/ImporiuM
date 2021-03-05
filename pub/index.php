<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../app/Helpers/conf.php';

define('BP', dirname(__DIR__));

spl_autoload_register(function ($class) {
    $class = lcfirst($class);
    $filename = BP . DIRECTORY_SEPARATOR . str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';

    if (file_exists($filename)) {
        require_once $filename;
    }
});

# maybe sometimes user/news/posts stuff
# session_start();

$router = new \App\Core\Router();
$application = new \App\Core\Application($router);

$response = $application->run();

if ($response) {
    echo $response;
}
