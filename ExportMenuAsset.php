<?php
namespace anangpratika\export;

use yii\web\AssetBundle;

class ExportMenuAsset extends AssetBundle
{
    public $sourcePath = '@vendor/anangpratika/yii2-export/assets/';

    public $css = [
        'css/export-data.css',
    ];
    public $js = [
        'js/export-data.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
