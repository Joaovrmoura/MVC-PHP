<?php

namespace App;
// Classe de service container
class App {
    // associa valores e salva o registro em uma chave com valor
    protected static $registry = [];

    public static function bind($key, $value) {
        static::$registry[$key] = $value;
    }
    public static function get($key) {
        return static::$registry[$key];
    }
}
