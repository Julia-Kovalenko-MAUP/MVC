<?php
// объявляем константу пути нашего проекта
define('ROOT', dirname(FILE));

// подключаем класс маршрутизатора
include_once(ROOT.'/components/Router.php');

$router = new Router;
$router->run();