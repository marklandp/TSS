<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TblInventoryType */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-inventory-type-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prefix')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'test_table')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'controller')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'setup_loan')->textInput() ?>

    <?= $form->field($model, 'test_day')->textInput() ?>

    <?= $form->field($model, 'optimal_storage_level')->textInput() ?>

    <?= $form->field($model, 'storage_point')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
