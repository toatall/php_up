<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;

/**
 * Description of SliderController
 *
 * @author Oleg
 */
class SliderController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
