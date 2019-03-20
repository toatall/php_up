<?php
/* @var $this yii\web\View */
use frontend\assets\NivoSliderAsset;

NivoSliderAsset::register($this);    
$this->registerJsFile('@web/js/nivo-slider/scripts.js', ['depends'=>[
    NivoSliderAsset::class,
]]);
?>

<div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">     
        <img src="files/photos/burger.jpg" alt="" />    
        <a href="#">
            <img src="files/photos/coffee.jpg" alt="" title="#htmlcaption" />
        </a>     
        <img src="files/photos/salad.jpg" alt="" title="This is an example of a caption" />     
        <img src="files/photos/subway.jpg" alt="" /> 
    </div> 
    <div id="htmlcaption" class="nivo-html-caption">     
        <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
    </div>
</div>