<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Приложения и контекст");
?>
<?
//Получили объект приложения
$application = \Bitrix\Main\Application::getInstance();

//Получили объект контекста
$context = $application->getContext();

//Сокращенный вариант записи
$context = \Bitrix\Main\Application::getInstance()->getContext();

//Получаем объект, содержащий серверные данные
$server = $context->getServer();

echo'<strong>$context->getServer()</strong>';

//Путь до корня сайта
echo '<br><br> Путь до корня сайта: '.$server->getDocumentRoot();

//SERVER_NAME
echo '<br><br> SERVER_NAME: '.$server->getServerName();

//$_SERVER[HTTP_X_REAL_IP]
echo '<br><br> $_SERVER[HTTP_X_REAL_IP]: '.$server->get('HTTP_X_REAL_IP');


//Получаем объект, содержащий данные запроса
$request = $context->getRequest();

echo'<br><br><strong>$context-getRequest()</strong>';

//$_REQUEST["some_name"] вариант 1
echo '<br><br> $_REQUEST["some_name"] вариант 1: '.$request["some_name"];

//$_REQUEST["some_name"] вариант 2
echo '<br><br> $_REQUEST["some_name"] вариант 2: '.$request->get("some_name");
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>