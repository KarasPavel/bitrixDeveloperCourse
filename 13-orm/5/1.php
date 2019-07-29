<?php
/**
 * Created by PhpStorm.
 * User: Sergey Pokoev
 * www.pokoev.ru
 * Date: 10.04.2015
 * Time: 16:20
 */
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?><?$APPLICATION->IncludeComponent(
	"academy:orm.list",
	"",
Array()
);

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>