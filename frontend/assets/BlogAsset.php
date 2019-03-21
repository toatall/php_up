<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\assets;

/**
 * Description of BlogAssets
 *
 * @author Oleg
 */
class BlogAsset extends \yii\web\AssetBundle
{
    public $baseUrl = '@web';

    public $css = [
        'css/bootstrap/bootstrap.css',        
        'css/fontawesome/all.css',
        'css/blog/clean-blog.css',
    ];
    
    public $js = [
        'js/jquery/jquery.js',
        'js/bootstrap/bootstrap.bundle.min.js',
        'js/blog/clean-blog.js',
    ];
    /*
    public $depends = [
        'frontend\assets\AppAsset',
    ];
    */
}
