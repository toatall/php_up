<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace console\models;

use Yii;

/**
 * Description of Employee
 *
 * @author Oleg
 */
class Employee 
{

    public static function getList()
    {
        $sql = 'SELECT * FROM {{%employee}}';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}
