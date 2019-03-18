<?php

namespace console\models;

use Yii;

/**
 * Description of Log
 *
 * @author Oleg
 */
class Log 
{
    
    public static function writeLog()
    {
        $str = date('Y-m-d H:i:s');
        $filePath = Yii::$app->basePath . '/../frontend/web/log.txt';
        return file_put_contents($filePath, $str . "\n", FILE_APPEND);
    }
    
}
