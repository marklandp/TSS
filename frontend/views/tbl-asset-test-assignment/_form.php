<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestAssignment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-asset-test-assignment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'inventory_item')->textInput() ?>

    <?= $form->field($model, 'user')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
