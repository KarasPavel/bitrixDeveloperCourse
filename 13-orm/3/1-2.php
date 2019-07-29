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
Удаляем группу пользователей с ID <?=$_REQUEST['id']?>
<?
$group = new CGroup;
$group->Delete($_REQUEST['id']);
?>
<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");