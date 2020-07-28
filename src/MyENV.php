<?php

namespace MyENV;

require '../vendor/autoload.php';

namespace MyENV;

class MyENV
{
    /*
     * Writing env on home project directory
     */
    public function __construct()
    {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->load();
    }

    /**
     * Get
     *
     * @param string $env
     * @return mixed|string
     */
    public static function get(string $env)
    {
        return array_key_exists($env, $_ENV) ? $_ENV[$env] : 'ERROR : Env param is missing';
    }
}