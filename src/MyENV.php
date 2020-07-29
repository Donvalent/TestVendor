<?php

namespace MyENV;

use Dotenv\Dotenv;

class MyENV
{
    /**
     * Get
     *
     * @param string $env
     * @return mixed|string
     */
    public static function get(string $env)
    {
        $dotenv = Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
        $dotenv->load();
        return array_key_exists($env, $_ENV) ? $_ENV[$env] : 'ERROR : Env param is missing';
    }
}