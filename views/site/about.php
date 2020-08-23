<?php

/* @var $this yii\web\View */
/* @var $model DataForm */
/* @var $data_list DataDTO[] */

use yii\helpers\Html;
use \app\widgets\DataFormWidget\DataFormWidget;
use \app\widgets\Alert;
use \app\widgets\DataListWidget\DataListWidget;
use \app\models\Dto\DataDTO;
use app\models\forms\DataForm;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <?= Alert::widget() ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the About page. You may modify the following file to customize its content:
    </p>
    <?= DataFormWidget::widget(['model' => $model]) ?>

    <?= DataListWidget::widget(['data_list' => $data_list]) ?>
</div>
