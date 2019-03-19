<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;

use frontend\models\Subscribe;
use frontend\models\Employee;
/**
 * Description of NewsletterController
 *
 * @author Oleg
 */
class NewsletterController extends \yii\web\Controller 
{
    public function actionSubscribe()
    {
        $formData = \Yii::$app->request->post();
        $model = new Subscribe();
        
        if (\Yii::$app->request->isPost)
        {        
            $model->email = $formData['email'];
            if ($model->validate() && $model->save())
            {
                \Yii::$app->session->setFlash('success', 'Subscribe completed!!!');
            }
        }
        return $this->render('subscribe', ['model'=>$model]);
    }
    
    public function actionRegister()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_REGISTER;
        
        $formData = \Yii::$app->request->post();
        
        if (\Yii::$app->request->isPost)
        {
            $model->attributes = $formData;
            
            if ($model->validate() && $model->save())
            {
                \Yii::$app->session->setFlash('success', 'Registered!');
            }
            else
            {
                \Yii::$app->session->setFlash('danger', 'Error validate or save! ' . print_r($model->getErrors(), true));
            }
        }
        
        return $this->render('register', ['model'=>$model]);
    }
    
    public function actionUpdate()
    {
        $model = new Employee();
        $model->scenario = Employee::SCENARIO_EMPLOYEE_UPDATE;
        
        $formData = \Yii::$app->request->post();
        if (\Yii::$app->request->isPost)
        {
            $model->attributes = $formData;
            if ($model->validate() && $model->save())
            {
                \Yii::$app->session->setFlash('success', 'Updated!');
            }            
        }
        
        return $this->render('update', ['model'=>$model]);
    }
}
