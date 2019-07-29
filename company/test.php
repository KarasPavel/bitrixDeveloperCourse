<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("test");
use \Bitrix\Main\Test\Typography\BookTable;
CModule::IncludeModule("iblock");

$result =  BookTable::getList(array(
//    'select' => array('TITLE'),
    'filter' => array('ID' => '1')
));
/*$book = new CGroup();*/
echo 'Элемент инфоблока по фильтру:<br>';
while($row = $result->fetch()){
    echo '<pre>';
    var_dump($row);
    echo'</pre>';
}

?><div>
	 <?$APPLICATION->IncludeComponent(
	"academy:class",
	"",
Array()
);?>
</div>
<br>
<div>
	 <?$APPLICATION->IncludeComponent(
	"academy:class.extends",
	"",
Array()
);?>
</div>
<br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>