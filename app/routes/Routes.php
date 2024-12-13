<?php

namespace app\routes;

class Routes{
    public static function get(){
        return [
            'get' => [
                '/' => 'homeController@index'
            ],
            'post' => []
        ];
    }
}