<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TblControllers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-controllers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'controller_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'display_name')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
