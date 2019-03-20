<?php
namespace frontend\widgets\newsList;

use frontend\models\Test;
/**
 * Description of NewsList
 *
 * @author Oleg
 */
class NewsList extends \yii\base\Widget
{
    public $showLimit = null;
    
    public function run()
    {
        $max = \Yii::$app->params['maxNewsInList'];
        if ($this->showLimit)
        {
            $max = $this->showLimit;
        }
        $list = Test::getListNews($max);
        
        return $this->render('block', [
            'list' => $list,
        ]);
    }
}
