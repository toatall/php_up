<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\models;

use \yii\base\Model;
/**
 * Description of Employee
 *
 * @author Oleg
 */
class Employee extends Model
{
    const SCENARIO_EMPLOYEE_REGISTER = 'register';
    const SCENARIO_EMPLOYEE_UPDATE = 'update';
    
    
    public $firstName;
    public $lastName;
    public $middleName;
    public $email;
    public $salary;
    public $date_birthday;
    public $date_start_work;
    public $city;
    public $position;
    public $id_code;
    
    

    public function scenarios() {
        return [
            self::SCENARIO_EMPLOYEE_REGISTER => ['firstName', 'lastName', 'middleName', 'email', 'date_birthday', 'date_start_work', 'city', 'position', 'id_code'],
            self::SCENARIO_EMPLOYEE_UPDATE => ['firstName', 'lastName', 'middleName'],
        ];
    }
    
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'email', 'date_start_work', 'position', 'id_code'], 'required'],
            [['firstName'], 'string', 'min'=>2],
            [['lastName'], 'string', 'min'=>3],
            [['email'], 'email'],
            [['middleName'], 'required', 'on'=>self::SCENARIO_EMPLOYEE_UPDATE],
            [['date_birthday', 'date_start_work'], 'date', 'format' => 'php:Y-m-d'],
            [['city'], 'integer'],
            [['id_code'], 'string', 'max'=>10],
        ];
    }
    
    public function save()
    {
        $sql = "insert into employee (id, fio, date_birthday, date_start_work, position, department_number, email) \n"
                    . "values (null, '{$this->lastName} {$this->firstName} {$this->middleName}', '{$this->date_birthday}', '{$this->date_start_work}', '{$this->position}', '{$this->id_code}', '{$this->email}')";
        return \Yii::$app->db->createCommand($sql)->execute();
        
    }      
    
}
