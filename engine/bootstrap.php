<?php
/**
 * Created by PhpStorm.
 * User: Bobur
 * Date: 12.02.2018
 * Time: 13:50
 */

require_once __DIR__ . '/../vendor/autoload.php';

use Engine\Cms;
use Engine\DI\DI;

try{
    $di = new DI();

    $di->set('test',['db' => 'db_object']);
    $di->set('test2',['db' => 'mail_object']);

    $cms = new Cms($di);
    $cms->run();

}catch (\ErrorException $e){
    echo $e->getMessage();

}