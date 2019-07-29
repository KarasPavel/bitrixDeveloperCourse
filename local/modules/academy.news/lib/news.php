<?php
/**
 * Created by PhpStorm.
 * User: Pavel the King of seven Kingdoms
 * Date: 20.07.2019
 * Time: 16:37
 */
namespace Academy\News;

use Bitrix\Main\Entity;
use Bitrix\Main\Type\DateTime;

class NewsTable extends Entity\DataManager
{
    public static function getTableName()
    {
        return 'academy_news';
    }

    public static function getMap()
    {
        return array(
            new Entity\IntegerField('ID', array(
                'primary' => true,
                'autocomplete' => true
            )),
            new Entity\StringField('TITLE', array(
                'required' => true,
            )),
            new Entity\StringField('TEXT'),
            new Entity\DateField('DATE'),
            new Entity\BooleanField('ACTIVE')
        );
    }
}