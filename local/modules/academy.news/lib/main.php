<?php
/**
 * Created by PhpStorm.
 * User: Pavel the King of seven Kingdoms
 */
namespace Academy\News;

class main
{
    const MODULE_ID = 'academy.news';

    public function GetPatch($notDocumentRoot=false)
    {
        if($notDocumentRoot)
            return str_ireplace($_SERVER["DOCUMENT_ROOT"],'',dirname(__DIR__));
        else
            return dirname(__DIR__);
    }

    public function isVersionD7()
    {
        return CheckVersion(SM_VERSION, '14.00.00');
    }
}