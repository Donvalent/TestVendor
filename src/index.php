<?php

    require '../vendor/autoload.php';
    require 'MyENV.php';

    use MyENV\MyENV;

    ini_set('error_reporting', E_ALL);
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

     print_r(MyENV::get('DB_HOST'));

?>