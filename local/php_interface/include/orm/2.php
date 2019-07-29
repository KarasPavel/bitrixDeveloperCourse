<?php
/**
 * Created by PhpStorm.
 * User: Sergey Pokoev
 * www.pokoev.ru
 * Date: 24.04.2015
 * Time: 9:47
 */
$eventManager = \Bitrix\Main\EventManager::getInstance();
$eventManager->addEventHandler(
    "main",
    '\Bitrix\Main\Group::OnBeforeAdd',
    "onBeforeAdd"
);

function onBeforeAdd(\Bitrix\Main\Entity\Event $event)
{
    $fields = $event->getParameter("fields");
    echo'<pre>';
    var_dump($fields);
    echo'</pre>';
}



$eventManager->addEventHandler(
    "main",
    '\Bitrix\Main\Group::OnAfterDelete',
    "onAfterDelete"
);

function onAfterDelete(\Bitrix\Main\Entity\Event $event)
{
    $primary = $event->getParameter("primary");

    echo'<pre>';
    var_dump($primary["ID"]);
    echo'</pre>';
}

