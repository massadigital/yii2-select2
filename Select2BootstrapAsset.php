<?php
namespace massadigital\select2;

use Yii;
use yii\web\AssetBundle;

class Select2BootstrapAsset extends AssetBundle
{

    public $sourcePath = '@bower/select2-bootstrap-css';

    public $css = [
        'select2-bootstrap.css'
    ];

    public $depends = [
        'massadigital\select2\Select2Asset'
    ];
}