<?php
namespace aekkapun\aws\checkbox;

use yii\web\AssetBundle;

class AwesomeCheckboxAsset extends AssetBundle
{
    public $sourcePath = '@bower/awesome-bootstrap-checkbox';

    public $css = [
        'awesome-bootstrap-checkbox.css',
    ];

    public $depends = [
        'yii\bootstrap4\BootstrapAsset',
    ];
}
