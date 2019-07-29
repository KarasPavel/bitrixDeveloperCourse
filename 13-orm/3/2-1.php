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

\Bitrix\Main\GroupTable::add(array(
    'NAME'  => 'Имя группы',
    'DESCRIPTION' => 'Группа добавлена с использованием API ORM D7'
));
?>
<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");