<?php
namespace igorkri\adminlte3\assets;

use yii\web\AssetBundle;

class AdminLteAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/dist';

    public $css = [
        'css/adminlte.min.css'
    ];

    public $js = [
        'js/adminlte.min.js'
    ];

    public $depends = [
        'igorkri\adminlte3\assets\BaseAsset',
        'igorkri\adminlte3\assets\PluginAsset'
    ];
}