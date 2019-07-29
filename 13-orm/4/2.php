<?
/**
 * Created by PhpStorm.
 * User: Sergey Pokoev
 * www.pokoev.ru
 * Date: 10.04.2015
 * Time: 16:20
 */
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$by = 'ID';
$order = 'sort';
$result = CUser::GetList($by, $order,
//    array('ID'=>'1'),
    array('IDs'=>'1'),
    array('FIELDS'=> array('LOGIN'))
);

echo 'Пользователи по фильтру:<br>';
while ($row = $result->fetch())
{
    echo'<pre>';
    var_dump($row);
    echo'</pre>';
}


require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");