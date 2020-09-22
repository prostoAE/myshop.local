<?php

// Определяем с каким контроллером будем работать
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'index';
echo 'Подключаем php файл (Контроллер) = ' . $controllerName . '<br>';

// Определяем с какой функцией будем работать
$actionName = isset($_GET['action']) ? ucfirst($_GET['action']) : 'index';
echo 'Функция формирующая страницу (action) = ' . $actionName . '<br>';

// Подключаем контроллер
include_once '../controllers/' . $controllerName . 'Controller.php';