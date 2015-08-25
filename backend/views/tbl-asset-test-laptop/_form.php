<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestLaptop */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-asset-test-laptop-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'inventory_id')->textInput() ?>

    <?= $form->field($model, 'update_standard_software')->textInput() ?>

    <?= $form->field($model, 'apply_os_patches')->textInput() ?>

    <?= $form->field($model, 'update_antivirus')->textInput() ?>

    <?= $form->field($model, 'update_anti_spyware')->textInput() ?>

    <?= $form->field($model, 'run_anti_virus_scan')->textInput() ?>

    <?= $form->field($model, 'run_anti_spyware_scan')->textInput() ?>

    <?= $form->field($model, 'run_chkdsk')->textInput() ?>

    <?= $form->field($model, 'run_disk_cleanup')->textInput() ?>

    <?= $form->field($model, 'run_disk_defragmenter')->textInput() ?>

    <?= $form->field($model, 'check_all_buttons')->textInput() ?>

    <?= $form->field($model, 'check_touchpad')->textInput() ?>

    <?= $form->field($model, 'check_volume_buttons')->textInput() ?>

    <?= $form->field($model, 'check_internal_mic')->textInput() ?>

    <?= $form->field($model, 'check_internal_speakers')->textInput() ?>

    <?= $form->field($model, 'check_all_ports')->textInput() ?>

    <?= $form->field($model, 'test_adapter')->textInput() ?>

    <?= $form->field($model, 'charger_laptop')->textInput() ?>

    <?= $form->field($model, 'turn_off_sleep')->textInput() ?>

    <?= $form->field($model, 'clean_laptop_monthly')->textInput() ?>

    <?= $form->field($model, 'date_created')->widget(\yii\jui\DatePicker::classname(), [
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
