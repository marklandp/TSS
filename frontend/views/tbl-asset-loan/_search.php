<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchTblAssetLoan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-asset-loan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'entry_id') ?>

    <?= $form->field($model, 'form_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'form_type') ?>

    <?= $form->field($model, 'closed_by') ?>

    <?php // echo $form->field($model, 'start_date') ?>

    <?php // echo $form->field($model, 'end_date') ?>

    <?php // echo $form->field($model, 'update_date') ?>

    <?php // echo $form->field($model, 'assigned_to') ?>

    <?php // echo $form->field($model, 'inventory') ?>

    <?php // echo $form->field($model, 'purpose') ?>

    <?php // echo $form->field($model, 'purpose_other') ?>

    <?php // echo $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'external_user') ?>

    <?php // echo $form->field($model, 'expected_return') ?>

    <?php // echo $form->field($model, 'loan_date') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
