<?php
/**
 * Created by PhpStorm.
 * User: Sergey Pokoev
 * www.pokoev.ru
 * Date: 17.04.2015
 * Time: 16:37
 */
namespace Academy\Orm13;

use Bitrix\Main\Entity;

class OrmTable extends Entity\DataManager
{
    public static function getTableName()
    {
        return 'academy_orm';
    }

    public static function getMap()
    {
        return array(
            new Entity\IntegerField('ID', array(
                'primary' => true,
                'autocomplete' => true
            )),
            new Entity\StringField('ISBN', array(
                'required' => true,
            )),
            new Entity\StringField('TITLE'),
            new Entity\DateField('PUBLISH_DATE')
        );
    }
}