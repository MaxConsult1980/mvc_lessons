<?php
define('DR', DIRECTORY_SEPARATOR);
// Указываем путь директории к проекта ../
define('ROOT_PATH', realpath(__DIR__.DR.'..') . DR);
// Путь к приложению наего файла ../application
define('APP_PATH', realpath(ROOT_PATH.'application') . DR);
// Путь к конфигам сайта ../application/config
define('CONFIG_PATH', realpath(APP_PATH.'config') . DR);
require_once ROOT_PATH . 'library' . DR . 'autoload.php';
$route = new \Core\Router();
echo $route->run();