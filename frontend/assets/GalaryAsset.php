<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\assets;

use yii\web\AssetBundle;
/**
 * Description of GalaryAsset
 *
 * @author Oleg
 */
class GalaryAsset extends AssetBundle
{
    public $css = [
        'css/galary/style.css', 
    ];
    
    public $js = [
        'js/isotope/jquery.isotope.js', 
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
