<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchTblInventoryConsumablesDetails */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-inventory-consumables-details-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'inventory_id') ?>

    <?= $form->field($model, 'added_quantity') ?>

    <?= $form->field($model, 'type') ?>

    <?= $form->field($model, 'date') ?>

    <?php // echo $form->field($model, 'user') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
