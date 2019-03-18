<?php

namespace console\controllers;

use Yii;
use console\models\Sender;
use console\models\Subsriber;
use console\models\News;
use console\models\Employee;

class MailerController extends \yii\console\Controller
{
    
    public function actionSend()
    {      
        $newsList = News::getList();
        $subscribers = Subsriber::getList();        
        Sender::run($subscribers, $newsList);               
        die;
    }   
    
    public function actionSendSalary()
    {
        $employeeList = Employee::getList();
        Sender::runSalary($employeeList);
    }
    
}

