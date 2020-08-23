<?php

/* @var $this yii\web\View */
/* @var $model DataForm */
/* @var $data_list DataDTO[] */


$this->title = 'My Yii Application';

use yii\helpers\Html;
use \app\widgets\DataFormWidget\DataFormWidget;
use \app\widgets\Alert;
use \app\widgets\DataListWidget\DataListWidget;
use \app\models\dto\DataDTO;
use app\models\forms\DataForm;


?>
<div class="site-index">
    <?= Alert::widget() ?>
    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">
        <?= DataFormWidget::widget(['model' => $model]) ?>

        <?= DataListWidget::widget(['data_list' => $data_list]) ?>
    </div>
</div>
