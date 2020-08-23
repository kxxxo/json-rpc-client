<?php
namespace app\widgets\DataFormWidget\assets;

use yii\web\AssetBundle;

/**
 * Class DataListWidgetAsset
 * @package app\widgets\DataListWidget\assets
 */
class DataFormWidgetAsset extends AssetBundle
{
    public  $sourcePath = '@app/widgets/DataFormWidget/assets/';

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
