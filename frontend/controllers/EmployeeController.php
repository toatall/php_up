<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;

use frontend\models\Employee;
use frontend\models\example\Animal;
use frontend\models\example\Human;

/**
 * Description of EmployeeController
 *
 * @author Oleg
 */
class EmployeeController extends \yii\web\Controller 
{
    public function actionIndex()
    {
        $employee = new Employee;
        $employee->firstName = 'Alex';
        $employee->lastName = 'Smith';
        $employee->middleName = 'John';
        $employee->salary = 1000;
    }
    
    public function actionTest()
    {
        $numan = new Human();
        $animal = new Animal();
        
        $numan->walk();
        echo '<br />';
        $animal->walk();
    }
}
