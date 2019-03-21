<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;

use frontend\models\Comments;
/**
 * Description of CommentsController
 *
 * @author Oleg
 */
class CommentsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new Comments();
        if (\Yii::$app->request->isPost)
        {
            $formData = \Yii::$app->request->post();
            $model->attributes = $formData;
            if ($model->validate() && $model->save())
            {
                \Yii::$app->session->setFlash('success', 'Save success');
            }
            else
            {
                \Yii::$app->session->setFlash('danger', 'Error validate or save. ' . print_r($model->getErrors(), true));
            }
        }
        return $this->render('index', [
            'model' => $model,
            'comments' => Comments::find(),
        ]);
    }
}
