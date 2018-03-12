<?php
/**
 * redisPub.php
 * redis pub 
 * User: lixin
 * Date: 17-12-26
 */
require_once __DIR__.'/../vendor/autoload.php';

$redisClient = \LQueue\Factory::getQueue('redis');

try{
//    $option = $redisClient->getConnectOption()->setPass('123456')->setDb("3");
    $redisClient->driver();
//    $redisClient->enQueue('asd','123');
    $redisClient->publish('FOO', 'bar');
}catch(\Exception $e){
    echo $e->getCode();
    echo $e->getMessage();
}

