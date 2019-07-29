<?
/**
 * Created by PhpStorm.
 * User: Sergey Pokoev
 * www.pokoev.ru
 */
include_once(dirname(__DIR__).'/lib/main.php');

use \Bitrix\Main\Localization\Loc;
use \Bitrix\Main\EventManager;
use \Academy\News\Main;
Loc::loadMessages(__FILE__);
Class academy_news extends CModule
{
	var $MODULE_ID = 'academy.news';
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
		$this->MODULE_NAME = Loc::getMessage("academy.news_MODULE_NAME");
		$this->MODULE_DESCRIPTION = Loc::getMessage("academy.news_MODULE_DESC");

		$this->PARTNER_NAME = Loc::getMessage("academy.news_PARTNER_NAME");
		$this->PARTNER_URI = Loc::getMessage("academy.news_PARTNER_URI");
	}


    function InstallDB()
    {
        \Bitrix\Main\Application::getConnection()->queryExecute("CREATE TABLE IF NOT EXISTS `academy_news`(
        `ID` int NOT NULL AUTO_INCREMENT,
        `TITLE` varchar(255) NOT NULL,
        `TEXT` varchar(255) DEFAULT '',
        `DATE` date NOT NULL,
        `ACTIVE` boolean DEFAULT TRUE,
        PRIMARY KEY(`ID`))"
        );
    }


    function UnInstallDB()
    {
        \Bitrix\Main\Application::getConnection()->queryExecute("DROP TABLE IF EXISTS academy_news");
    }


	function DoInstall()
	{
		global $APPLICATION;
        if(Main::isVersionD7())
        {
            $this->InstallDB();
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
        $this->UnInstallDB();
	}
}
?>