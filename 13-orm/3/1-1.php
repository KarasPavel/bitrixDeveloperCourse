<?php
/**
 * Created by PhpStorm.
 * User: Sergey Pokoev
 * www.pokoev.ru
 * Date: 10.04.2015
 * Time: 16:20
 */
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<?
$group = new CGroup;
$group->Add(array(
    'NAME'  => 'Имя группы',
    'DESCRIPTION' => 'Группа добавлена с использованием API старого ядра'
));
?>
<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");