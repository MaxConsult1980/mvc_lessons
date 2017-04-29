<?php

namespace Core;


class Config {

    private static $_isInit = false;
    private static $_instance;
    private $configs = [];

    private function __construct()
    {
        $this->loadConfigs();
    }

    private function __clone()
    {

    }

    public function getInstance()
    {
        if(!self::$_instance instanceof Config) {
            self::$_instance = new self();
            self::$_isInit = true;
        }

        return self::$_instance;

    }

    public static function load()
    {
        if(self::$_isInit === false){
            self::getInstance();
        }

        return self::$_instance->getConfig();
    }

    private function getConfig()
    {
      return $this->configs;
    }

    private function loadConfigs() {
        if(is_dir(CONFIG_PATH)) {
            $lists = scandir(CONFIG_PATH);
            if(count($lists) > 2) {
                unset($lists[array_search('.', $lists)]);
                unset($lists[array_search('..', $lists)]);

                $fileNames = array_map(function($fileName) {
                    return str_replace('.php', null, $fileName);
                }, $lists);
                $contentConfigs = array_map(function($fileName) {
                    return include CONFIG_PATH.$fileName;
                }, $lists);
                $this->configs = array_combine($fileNames, $contentConfigs);
            }
        }
    }
}