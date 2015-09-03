<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestRemote */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-asset-test-remote-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'inventory_id')->textInput() ?>

    <?= $form->field($model, 'test_power_button')->textInput() ?>

    <?= $form->field($model, 'enter_menu_options')->textInput() ?>

    <?= $form->field($model, 'make_screen_blank_button')->textInput() ?>

    <?= $form->field($model, 'choose_source_button')->textInput() ?>

    <?= $form->field($model, 'test_battery_1')->textInput() ?>

    <?= $form->field($model, 'test_battery_2')->textInput() ?>

    <?= $form->field($model, 'battery_type')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'up_elt_mount_remote')->textInput() ?>

    <?= $form->field($model, 'down_elt_mount_remote')->textInput() ?>

    <?= $form->field($model, 'stop_elt_mount_remote')->textInput() ?>

    <?= $form->field($model, 'created_date')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'eng',
    'dateFormat' => 'yyyy-MM-dd',
]) ?>

    <?= $form->field($model, 'update_date')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'eng',
    'dateFormat' => 'yyyy-MM-dd',
]) ?>

    <?= $form->field($model, 'service_period')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
