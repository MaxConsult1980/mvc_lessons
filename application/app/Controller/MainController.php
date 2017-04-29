<?php
namespace App\Controller;
class MainController
{
    public function indexAction() {
        echo __CLASS__ . '::' . __METHOD__;
    }
    public function viewAction() {
        return "Hello World Action !)";
    }
}