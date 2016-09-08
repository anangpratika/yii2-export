<?php

namespace anangpratika\export;

use yii\web\AssetBundle;

class ExportColumnAsset extends AssetBundle
{
    public $sourcePath = '@vendor/anangpratika/yii2-export/assets/';

    public $css = [
        'css/export-columns.css',
    ];
    public $js = [
        'js/export-columns.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
    
}