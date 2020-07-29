<?php

namespace MyENV;

require '../vendor/autoload.php';

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
        $dotenv = Dotenv::createImmutable(__DIR__);
        $dotenv->load();
        return array_key_exists($env, $_ENV) ? $_ENV[$env] : 'ERROR : Env param is missing';
    }
}