<?php
namespace app\widgets\DataListWidget\assets;

use yii\web\AssetBundle;

/**
 * Class DataListWidgetAsset
 * @package app\widgets\DataListWidget\assets
 */
class DataListWidgetAsset extends AssetBundle
{
    public  $sourcePath = '@app/widgets/DataListWidget/assets/';

    public $css = [
        'css/style.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public function init()
    {
        parent::init();
        $this->publishOptions['forceCopy'] = true;
    }
}
