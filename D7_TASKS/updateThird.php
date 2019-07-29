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
NewsTable::update(3,array(
    'DATE' => new Type\Date('2018-09-01', 'Y-m-d')
));
?>
<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");