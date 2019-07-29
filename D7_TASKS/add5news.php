<?php
/**
 * Created by PhpStorm.
 * User: Sergey Pokoev
 * www.pokoev.ru
 * Date: 10.04.2015
 * Time: 16:20
 */
use \Bitrix\Main;
use \Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Entity;
use \Bitrix\Main\Type;
use \Academy\News\NewsTable;
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<?
if(!Main\Loader::includeModule('academy.news')){
    throw new Main\LoaderException("Модуль инструментарция для работы с ORM не установлен");
}

/*$result = NewsTable::getList(array(
));
var_dump($result);*/

for($i=1;$i<6;$i++) {
    NewsTable::add(array(
        'TITLE' => 'НОВОСТЬ'. $i,
        'TEXT' => 'Рандомное описание №'. $i
    ));
}
?>
<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");