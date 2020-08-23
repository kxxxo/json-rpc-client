<?php
namespace app\widgets\DataListWidget;

use app\models\dto\DataDTO;
use \yii\bootstrap\Widget;

/**
 * Class DataListWidget
 * @package app\widgets\DataListWidget
 */
class DataListWidget extends Widget
{
    /** @var $data_list DataDTO[] */
    public $data_list;

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        return $this->render('list', [
            'data_list' => $this->data_list,
        ]);
    }
}
