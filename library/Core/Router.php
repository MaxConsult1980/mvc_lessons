<?php

namespace Core;

class Router {

    private $routes;

    public function __construct()
    {
        $this->routers = Config::load('router');
    }

    /**
     *  Обработка URI запросов
     */
    public function run()
    {
        // парсинг строки
        $uri = strtolower($_SERVER['REQUEST_URI']);

        foreach($this->routers as $nameRouter => $params) {
            if($params['url_pattern'] == $uri) {
                if(array_key_exists('default', $params)) {
                    $controllerName = $params['controller'];
                    $actionName = $params['action'];
                }
                break;
            }
        }
    }
}