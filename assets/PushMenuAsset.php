<?php

namespace datalayerru\PushMenuWidget\assets;

use yii\web\AssetBundle;

class PushMenuAsset extends AssetBundle
{
    public $sourcePath = '@vendor/datalayerru/pushmenu-widget-yii2/assets/SlidePushMenus';
    public $js         = [
        'js/classie.js',
        'js/modernizr.custom.js'
    ];
    public $css        = [
        'css/default.css',
        'css/component.css'
    ];

}