<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;

use frontend\models\OrderWindow;

/**
 * Description of OrderWindowController
 *
 * @author Oleg
 */
class OrderWindowController extends \yii\web\Controller 
{
    
    public function actionIndex()
    {
        $model = new OrderWindow();
        
        if (\Yii::$app->request->isPost)
        {
            $formData = \Yii::$app->request->post();
            $model->attributes = $formData;            
            if ($model->validate() && $model->save())
            {
                $model->sendNotify();
                \Yii::$app->session->setFlash('success', 'Your order is send!');
            }
            else
            {
                \Yii::$app->session->setFlash('danger', 'Not validate or save. ' . print_r($model->getErrors(), true));
            }
        }        
        
        return $this->render('index', ['model'=>$model]);
    }
}
