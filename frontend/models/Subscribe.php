<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\models;

/**
 * Description of Subscribe
 *
 * @author Oleg
 */
class Subscribe extends \yii\base\Model
{
    public $email;
    
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['email'], 'email'],
        ];
    }
    
    public function save()
    {
        $sql = "insert into subscriber (id, email) values (null, '{$this->email}')";
        return \Yii::$app->db->createCommand($sql)->execute();
    }
        
}
