<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\models;

use Yii;

class Test
{
    public static function getListNews($max)
    {
        $max = intval($max);
        $sql = 'SELECT * FROM news LIMIT ' . $max;
        
        $result = Yii::$app->db->createCommand($sql)->queryAll();
                
        if (!empty($result) && is_array($result))
        {
            foreach ($result as &$item)
            {
                $item['content'] = Yii::$app->stringHelper->getShort($item['content']);
            }
        }
        
        return $result;        
    }
}