<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;

/**
 * Description of AliasController
 *
 * @author Oleg
 */
class AliasController extends \yii\web\Controller
{
    public function actionExample()
    {        
        $result = mkdir(\Yii::getAlias('@files') . '/test3');
        var_dump($result);
    }
}