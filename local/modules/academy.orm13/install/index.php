<?
/**
 * Created by PhpStorm.
 * User: Sergey Pokoev
 * www.pokoev.ru
 */
include_once(dirname(__DIR__).'/lib/main.php');

use \Bitrix\Main\Localization\Loc;
use \Bitrix\Main\EventManager;
use \Academy\Orm13\Main;
Loc::loadMessages(__FILE__);
Class academy_orm13 extends CModule
{
	var $MODULE_ID = 'academy.orm13';
	var $MODULE_VERSION;
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME;
	var $MODULE_DESCRIPTION;
	var $MODULE_CSS;
	var $strError = '';

	function __construct()
	{
		$arModuleVersion = array();
		include(__DIR__."/version.php");
		$this->MODULE_VERSION = $arModuleVersion["VERSION"];
		$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
		$this->MODULE_NAME = Loc::getMessage("academy.orm13_MODULE_NAME");
		$this->MODULE_DESCRIPTION = Loc::getMessage("academy.orm13_MODULE_DESC");

		$this->PARTNER_NAME = Loc::getMessage("academy.orm13_PARTNER_NAME");
		$this->PARTNER_URI = Loc::getMessage("academy.orm13_PARTNER_URI");
	}


	function InstallFiles($arParams = array())
	{
        CopyDirFiles(Main::GetPatch()."/install/components/academy", $_SERVER["DOCUMENT_ROOT"]."/local/components/academy", true, true);

        return true;
	}

    function InstallDB()
    {
        \Bitrix\Main\Application::getConnection()->queryExecute("CREATE TABLE IF NOT EXISTS `academy_orm`(
        `ID` int NOT NULL AUTO_INCREMENT,
        `ISBN` varchar(255) NOT NULL,
        `TITLE` varchar(255) NOT NULL,
        `PUBLISH_DATE` date NOT NULL,
        PRIMARY KEY(`ID`))"
        );
    }

    function InstallEvents()
    {
        EventManager::getInstance()->registerEventHandler(Main::MODULE_ID, '\Academy\Orm13\Orm::OnBeforeAdd', Main::MODULE_ID, '\Academy\Orm13\Event', 'event');

        return true;
    }

	function UnInstallFiles()
	{
        DeleteDirFilesEx("/bitrix/components/academy/orm.list");

		return true;
	}

    function UnInstallDB()
    {
        \Bitrix\Main\Application::getConnection()->queryExecute("DROP TABLE IF EXISTS academy_orm");
    }

    function UnInstallEvents()
    {
        EventManager::getInstance()->unRegisterEventHandler(Main::MODULE_ID, '\Academy\Orm13\Orm::OnBeforeAdd', Main::MODULE_ID, '\Academy\Orm13\Event', 'event');

        return true;
    }

	function DoInstall()
	{
		global $APPLICATION;
        if(Main::isVersionD7())
        {
            $this->InstallFiles();
            $this->InstallDB();
            $this->InstallEvents();
            RegisterModule(Main::MODULE_ID);
        }
        else
        {
            $APPLICATION->ThrowException(Loc::getMessage("academy.orm13_INSTALL_ERROR_VERSION"));
        }

        $APPLICATION->IncludeAdminFile(Loc::getMessage("academy.orm13_INSTALL_TITLE"), Main::GetPatch()."/install/step.php");
	}

	function DoUninstall()
	{
		UnRegisterModule(Main::MODULE_ID);
        $this->UnInstallEvents();
        $this->UnInstallDB();
		$this->UnInstallFiles();
	}
}
?>