<?php

namespace professionalweb\PushMenuWidget\assets;

use yii\web\AssetBundle;

class PushMenuAsset extends AssetBundle
{
    public $sourcePath = '@vendor/professionalweb/pushmenu-widget-yii2/assets/SlidePushMenus';
    public $js         = [
        'js/classie.js',
        'js/modernizr.custom.js'
    ];
    public $css        = [
        'css/default.css',
        'css/component.css'
    ];

}