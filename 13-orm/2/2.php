<?
/**
 * Created by PhpStorm.
 * User: Sergey Pokoev
 * www.pokoev.ru
 * Date: 10.04.2015
 * Time: 16:20
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$result = \Bitrix\Main\GroupTable::getList(array(
    'select'  => array('NAME'),
    'filter'  => array('ID'=>'1')
));

echo 'Группа пользователей по фильтру:<br>';
while ($row = $result->fetch())
{
    echo'<pre>';
    var_dump($row);
    echo'</pre>';
}

\Bitrix\Main\Loader::includeModule("iblock");

$result = \Bitrix\Iblock\ElementTable::getList(array(
    'select'  => array('NAME'),
    'filter'  => array('ID'=>'1')
));

echo 'Элемент инфоблока по фильтру:<br>';
while ($row = $result->fetch())
{
    echo'<pre>';
    var_dump($row);
    echo'</pre>';
}

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");