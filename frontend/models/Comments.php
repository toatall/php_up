<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\models;

/**
 * Description of Comments
 *
 * @author Oleg
 */
class Comments extends \yii\base\Model 
{
    public $name;
    public $email;
    public $comment;
    
    public function rules(): array 
    {
        return [
            [['name', 'comment'], 'required'],
            [['email'], 'email'],
        ];
    }
    
    public function save()
    {        
        $this->comment = \yii\helpers\Html::encode($this->comment);
        $sql = "insert into comments (id, name, email, comment) \n"
                . "values (null, '{$this->name}', '{$this->email}', '{$this->comment}')";
        return \Yii::$app->db->createCommand($sql)->execute();
    }
    
    public static function find()
    {
        $sql = 'select * from comments';
        return \Yii::$app->db->createCommand($sql)->queryAll();
    }
    
}
