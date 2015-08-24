<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TblDays */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-days-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'day')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'index')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
