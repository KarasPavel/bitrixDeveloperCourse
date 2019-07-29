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

$result = NewsTable::getList(array(
    'filter'  => array('ID'=>'1')
));
$row = $result->fetchAll();
NewsTable::update(1,array(
        'TEXT' => $row[0]["TEXT"]." Test update"
    ));
?>
<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");