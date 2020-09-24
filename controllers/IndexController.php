<?php

/**
 * Контроллер главной страниці
 */
function testAction() {
    echo 'IndexController.php > testAction';
}

/**
 * Формирование главной страницы сайта
 * @param object $smarty шаблонизатор
 */
function indexAction($smarty) {
    $smarty->assign('pageTitle', 'Главная страница сайта');

    loadTemplate($smarty, 'index');
}