<?php
/**
 * Created by PhpStorm.
 * User: Sergey Pokoev
 * www.pokoev.ru
 * Date: 25.03.2015
 * Time: 14:20
 */
class classComponents extends CBitrixComponent
{

    function var1()
    {
        $arResult['var1']='Отработал метод var1 компонента class';

        return $arResult;
    }

    public function executeComponent()
    {
        $this->arResult = array_merge($this->arResult,$this->var1());

        $this->includeComponentTemplate();
    }
};