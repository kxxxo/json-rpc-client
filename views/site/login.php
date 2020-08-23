<?php

/* @var $this yii\web\View */
/* @var $model DataForm */
/* @var $data_list DataDTO[] */

use yii\helpers\Html;
use \app\widgets\DataFormWidget\DataFormWidget;
use \app\widgets\Alert;
use \app\widgets\DataListWidget\DataListWidget;
use \app\models\dto\DataDTO;
use app\models\forms\DataForm;


$this->title = 'Example Login page';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <?= Alert::widget() ?>
    <h1><?= Html::encode($this->title) ?></h1>

    <?= DataFormWidget::widget(['model' => $model]) ?>

    <?= DataListWidget::widget(['data_list' => $data_list]) ?>
</div>
