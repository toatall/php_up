<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace console\controllers;

use console\models\Log;

/**
 * Description of LogController
 *
 * @author Oleg
 */
class LogController extends \yii\console\Controller 
{
    
    public function actionIndex()
    {
        Log::writeLog();
    }
    
}
