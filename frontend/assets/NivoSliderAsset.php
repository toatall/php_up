<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\assets;

use yii\web\AssetBundle;
/**
 * Description of NivoSliderAsset
 *
 * @author Oleg
 */
class NivoSliderAsset extends AssetBundle
{
    public $css = [
        '/css/nivo-slider/nivo-slider.css',
        '/css/nivo-slider/bar/bar.css',
        '/css/nivo-slider/dark/dark.css',
        '/css/nivo-slider/default/default.css',
        '/css/nivo-slider/light/light.css',
    ];
    
    public $js = [
        '/js/nivo-slider/jquery.nivo.slider.pack.js',
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
