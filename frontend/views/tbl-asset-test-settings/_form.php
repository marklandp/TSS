<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestSettings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-asset-test-settings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'start_day')->textInput() ?>

    <?= $form->field($model, 'end_day')->textInput() ?>

    <?= $form->field($model, 'current_period')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
