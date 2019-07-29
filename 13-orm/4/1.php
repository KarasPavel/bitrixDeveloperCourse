<?
/**
 * Created by PhpStorm.
 * User: Sergey Pokoev
 * www.pokoev.ru
 * Date: 10.04.2015
 * Time: 16:20
 */
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$result = \Bitrix\Main\UserTable::getList(array(
//    /'filter'  => array('ID'=>'1'),
    'filter'  => array('IDs'=>'1'),
    'select'  => array('LOGIN')
));
echo 'Пользователи по фильтру:<br>';
while ($row = $result->fetch())
{
    echo'<pre>';
    var_dump($row);
    echo'</pre>';
}

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");