<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace console\models;

use Yii;
use console\models\Log;

/**
 * Description of Sender
 *
 * @author Oleg
 */
class Sender 
{
    
    public static function run($subscribers, $newsList)
    {
        foreach ($subscribers as $subscriber)
        {
            $result = Yii::$app->mailer->compose('/mailer/newslist', [
                'newsList' => $newsList,
            ])
                    ->setFrom('test2.php.up@gmail.com')
                    ->setTo($subscriber['email'])
                    ->setSubject('Theme')                  
                    ->send();
            var_dump($result);
        }
    }
    
    public static function runSalary($employees)
    {
        foreach ($employees as $employee)
        {
            $result = Yii::$app->mailer->compose('/mailer/employee', [
                'employee' => $employee,
            ])
                    ->setFrom('test2.php.up@gmail.com')
                    ->setTo($employee['email'])
                    ->setSubject('Рассылка ведомостей о зарплате')                  
                    ->send();
            Log::writeLog('Результат рссылки для ' . $employee['fio'] . ': ' . $result);
            var_dump($result);
        }
    }
}
