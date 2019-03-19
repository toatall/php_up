<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\models;

/**
 * Description of OrderWindow
 *
 * @author Oleg
 */
class OrderWindow extends \yii\base\Model 
{
    public $width;
    public $height;
    public $count_cell;
    public $count_sash;  
    public $count_turning;
    public $color;
    public $sill;
    public $email;
    public $full_name;
    
    public function rules(): array {
        return [
            [['full_name', 'email', 'count_cell', 'width', 'height', 'count_sash', 'count_turning', 'sill'], 'required'],
            [['count_cell', 'count_turning'], 'integer'],
            [['width'], 'integer', 'min' => 70, 'max'=>210],
            [['height'], 'integer', 'min' => 100, 'max'=>200],
            [['count_cell'], 'in', 'range'=>[1,2,3]],
            [['count_sash'], 'integer', 'min' => 1],
            [['count_turning'], 'compare', 'operator'=> '<=', 'compareAttribute'=>'count_sash'],
            [['sill'], 'boolean'],
            [['email'], 'email'],
        ];
    }   
      
    public function save()
    {
        $sql = "insert into order_window (id, width, height, count_cell, count_sash, count_turning, color, sill, email, full_name) \n"
                . "values (null, {$this->width}, {$this->height}, {$this->count_cell}, {$this->count_sash}, {$this->count_turning}, '{$this->color}', {$this->sill}, '{$this->email}', '{$this->full_name}')";
    
        return \Yii::$app->db->createCommand($sql)->execute();
    }
    
    public function sendNotify()
    {
        // send email to administrator
        return \Yii::$app->mailer->compose('/order-window/mail', [
                'model' => $this,
            ])
            ->setFrom('test2.php.up@gmail.com')
            ->setTo(\Yii::$app->params['adminEmail'])
            ->setSubject('Order window')                  
            ->send();
    }
    
}
