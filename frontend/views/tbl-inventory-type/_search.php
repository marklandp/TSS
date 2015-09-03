<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchTblInventoryType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-inventory-type-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'prefix') ?>

    <?= $form->field($model, 'test_table') ?>

    <?= $form->field($model, 'controller') ?>

    <?php // echo $form->field($model, 'setup_loan') ?>

    <?php // echo $form->field($model, 'test_day') ?>

    <?php // echo $form->field($model, 'optimal_storage_level') ?>

    <?php // echo $form->field($model, 'storage_point') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
