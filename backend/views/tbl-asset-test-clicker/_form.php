<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestClicker */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-asset-test-clicker-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'inventory_id')->textInput() ?>

    <?= $form->field($model, 'test_previous_button')->textInput() ?>

    <?= $form->field($model, 'test_next_button')->textInput() ?>

    <?= $form->field($model, 'test_laser_pointer')->textInput() ?>

    <?= $form->field($model, 'test_battery_1')->textInput() ?>

    <?= $form->field($model, 'test_battery_2')->textInput() ?>

    <?= $form->field($model, 'battery_type')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_date')->textInput() ?>

    <?= $form->field($model, 'update_date')->textInput() ?>

    <?= $form->field($model, 'service_period')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
