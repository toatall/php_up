<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\widgets\newsList\NewsList;
use frontend\widgets\salaryEmployee\SalaryEmployee;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <div class="row">
        <div class="col-md-3">
            <?= SalaryEmployee::widget() ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-9">
            <h1><?= Html::encode($this->title) ?></h1>

            <p>This is the About page. You may modify the following file to customize its content:</p>

            <code><?= __FILE__ ?></code>
            
        </div>
        <div class="col-md-3">
           <?php echo NewsList::widget(['showLimit'=>3]) ?>
        </div>
    </div>
    
    
</div>
