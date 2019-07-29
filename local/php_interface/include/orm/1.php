<?php
/**
 * Created by PhpStorm.
 * User: Sergey Pokoev
 * www.pokoev.ru
 * Date: 24.04.2015
 * Time: 9:47
 */
AddEventHandler("main", "OnBeforeGroupAdd", 'MyOnBeforeGroupAdd');

function MyOnBeforeGroupAdd($arFields)
{
    echo'<pre>';
    var_dump($arFields);
    echo'</pre>';
}