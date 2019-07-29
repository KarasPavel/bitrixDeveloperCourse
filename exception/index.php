<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Exception");
?>
<?
//throw new \Bitrix\Main\ArgumentTypeException("Аргумент, который генерирует исключение",'Тип аргумента');

try 
{
    throw new \Bitrix\Main\ArgumentTypeException("Аргумент, который генерирует исключение",'Тип аргумента');
}
 catch(Exception $e) 
{
    echo'<pre>';
    var_dump($e->getRequiredType());
    echo'</pre>';
};
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>