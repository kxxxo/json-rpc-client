<?php
use \app\models\forms\DataForm;
use \yii\web\View;
use \yii\bootstrap\ActiveForm;
use \yii\helpers\Html;
use \app\widgets\DataFormWidget\assets\DataFormWidgetAsset;
/* @var $this View */
/* @var $model DataForm */

DataFormWidgetAsset::register($this);
?>

<div class="widget-form">
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

    <?= $form->field($model, 'field_string')->textInput(['autofocus' => true]) ?>

    <?= $form->field($model, 'field_integer')->input('number') ?>

    <?= $form->field($model, 'field_boolean')->checkbox([
        'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
    ]) ?>

    <div class="form-group">
        <div class="col-lg-offset-1 col-lg-11">
            <?= Html::submitButton(Yii::t('yii','Send'), ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>
</div>

