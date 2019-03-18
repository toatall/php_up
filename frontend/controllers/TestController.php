<?php
namespace frontend\controllers;

use yii\web\Controller;
use Yii;
use frontend\models\Test;

class TestController extends Controller
{
    public function actionIndex()
    {
        $max = Yii::$app->params['maxNewsInList'];
        $list = Test::getListNews($max);
        
        return $this->render('index', [
            'list' => $list,
        ]);
    }
    
}
