<?
/**
 * Created by PhpStorm.
 * User: Sergey Pokoev
 * www.pokoev.ru
 * Date: 10.04.2015
 * Time: 16:20
 */
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$by = 'ID';
$order = 'sort';
$result = CGroup::GetList($by, $order,
    array('ID'=>'1')
);

echo 'Группа пользователей по фильтру:<br>';
while ($row = $result->fetch())
{
    echo'<pre>';
    var_dump($row);
    echo'</pre>';
}

CModule::IncludeModule("iblock");

$result = CIBlockElement::GetList(false,
    array('ID'=>'1'),
    false,
    false,
    array('NAME')
);

echo 'Элемент инфоблока по фильтру:<br>';
while ($row = $result->fetch())
{
    echo'<pre>';
    var_dump($row);
    echo'</pre>';
}


require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");