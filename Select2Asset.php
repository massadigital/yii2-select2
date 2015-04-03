<?php

namespace massadigital\select2;

use Yii;
use yii\web\AssetBundle;


class Select2Asset extends AssetBundle
{

    public $sourcePath = '@bower/select2/dist';
    public $css = [
        'css/select2.min.css',
    ];
    public $js = [
        'js/select2.full.min.js',
    ];
    public $depends = [
        'yii\bootstrap\BootstrapThemeAsset'
    		    ];

    
}
