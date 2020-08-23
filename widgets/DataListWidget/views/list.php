<?php

use \app\models\dto\DataDTO;
use \yii\web\View;
use \app\widgets\DataListWidget\assets\DataListWidgetAsset;
/** @var $this View */
/** @var $data_list DataDTO  */

DataListWidgetAsset::register($this);
?>
<table class="data-list-table">
    <thead>
        <tr>
            <th>
                <?= Yii::t('yii','id')?>
            </th>
            <th>
                <?= Yii::t('yii','Field string')?>
            </th>
            <th>
                <?= Yii::t('yii','Field integer')?>
            </th>
            <th>
                <?= Yii::t('yii','Field Boolean')?>
            </th>
            <th>
                <?= Yii::t('yii','Created')?>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data_list as $dataDTO) : ?>
            <tr>
                <td>
                    <?= $dataDTO->id ?>
                </td>
                <td>
                    <?= $dataDTO->field_string ?>
                </td>
                <td>
                    <?= $dataDTO->field_integer ?>
                </td>
                <td>
                    <?= $dataDTO->field_boolean ? 1: 0 ?>
                </td>
                <td>
                    <?= $dataDTO->created ?>
                </td>
            </tr>
        <? endforeach; ?>
    </tbody>
</table>
