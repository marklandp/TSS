<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ActiveRecordLog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="active-record-log-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'action')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idModel')->textInput() ?>

    <?= $form->field($model, 'field')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'From')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'To')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'creationdate')->textInput() ?>

    <?= $form->field($model, 'userid')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
