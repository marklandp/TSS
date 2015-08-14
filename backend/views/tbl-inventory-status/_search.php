<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchTblInventoryStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-inventory-status-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'inventory_type') ?>

    <?= $form->field($model, 'user_current_stock') ?>

    <?= $form->field($model, 'generated_current_stock') ?>

    <?= $form->field($model, 'inventory_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
