<?php

define(DR, DIRECTORY_SEPARATOR);
define(ROOT_PATH, realpath(__DIR__ . DR . '..') . DR);

define(APP_PATH, realpath(ROOT_PATH .'application') . DR);

define(CONFIG_PATH, realpath(APP_PATH .'config') . DR);

require_once ROOT_PATH . 'library' . DR . 'autoload.php';

$router = new \Core\Router();

echo $router->run();