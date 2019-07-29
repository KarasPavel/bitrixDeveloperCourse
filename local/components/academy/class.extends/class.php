<?php
/**
 * Created by PhpStorm.
 * User: Sergey Pokoev
 * www.pokoev.ru
 * Date: 25.03.2015
 * Time: 14:20
 */
//Необходимо для корректного поиска класса CDemoSqr
CBitrixComponent::includeComponentClass("academy:class");
//Наследник расширяющий функциональность:
class classComponentsExtends extends classComponents
{
    function var2()
    {
        $arResult['var2']='Отработал метод var2 компонента class.extends';

        return $arResult;
    }

    public function executeComponent()
    {
        $this->arResult = array_merge($this->arResult,$this->var2());

        parent::executeComponent();
    }
};