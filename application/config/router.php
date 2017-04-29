<?php

return [

    'home' => [
        'url_pattern' => '/',
        'default' => [
            'controller' => 'Main',
            'action' => 'index'
        ]
    ],

//    '[NAME_ROUTE]' => [
//        'url_pattern' => '/product/<action>/<parametr>',
//        'default' => [
//            'controller' => 'Product',
//            'action' => 'index'
//        ],
//        'params' => [
//            'action' => '(index|view)',
//            'param' => '[0-9]+'
//        ]
//    ],

];