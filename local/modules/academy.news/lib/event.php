<?php
/**
 * Created by PhpStorm.
 * User: Pavel the King of seven Kingdoms
 * Date: 20.07.2019
 * Time: 15:45
 */

namespace Academy\News;

class event
{
    function Event(\Bitrix\Main\Entity\Event $event)
    {
        $fields = $event->getParameter("fields");
        echo'Отработало событие OnBeforeAdd<br>
            <pre>';
        var_dump($fields);
        echo'</pre><br>';
    }
}