<?php
/**
 * Created by PhpStorm.
 * User: Sergey Pokoev
 * www.pokoev.ru
 * Date: 08.05.2015
 * Time: 15:45
 */

namespace Academy\Orm13;

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