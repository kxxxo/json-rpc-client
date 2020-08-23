<?php
namespace app\widgets\DataFormWidget;

use app\models\forms\DataForm;
use Yii;

/**
 * Class DataListWidget
 * @package app\widgets\DataListWidget
 */
class DataFormWidget extends \yii\bootstrap\Widget
{
    /** @var DataForm */
    public $model;

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        return $this->render('form',[
            'model'=>$this->model
        ]);
    }
}
