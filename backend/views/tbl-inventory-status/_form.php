<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TblInventoryStatus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-inventory-status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'inventory_type')->textInput() ?>

    <?= $form->field($model, 'user_current_stock')->textInput() ?>

    <?= $form->field($model, 'generated_current_stock')->textInput() ?>

    <?= $form->field($model, 'inventory_date')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
