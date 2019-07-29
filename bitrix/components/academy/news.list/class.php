<?php
/**
 * Created by PhpStorm.
 * User: Сергей
 * Date: 16.10.2014
 * Time: 16:37
 */
use \Bitrix\Main;
use \Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Entity;
use \Bitrix\Main\Type;
use \Academy\News\NewsTable;


class NewsList extends CBitrixComponent
{
    /**
     * проверяет подключение необходиимых модулей
     * @throws LoaderException
     */
    protected function checkModules()
    {
        if (!Main\Loader::includeModule('academy.news'))
            throw new Main\LoaderException(Loc::getMessage('academy.orm13_MODULE_NOT_INSTALLED'));
    }

    public function executeComponent()
    {
        $this -> checkModules();

        NewsTable::add(array(
            'TITLE' => 'LEN',
            'TEXT' => 'Один элемент сущности',
            'PUBLISH_DATE' => new Type\Date('2015-04-16', 'Y-m-d')
        ));

        $this->arResult = NewsTable::GetList()->fetchAll();

        $this->includeComponentTemplate();
    }
};