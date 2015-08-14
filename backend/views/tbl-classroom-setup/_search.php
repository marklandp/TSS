<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchTblClassroomSetup */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-classroom-setup-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'form_id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'form_type') ?>

    <?= $form->field($model, 'setup_type') ?>

    <?= $form->field($model, 'setup_other') ?>

    <?php // echo $form->field($model, 'closed_by') ?>

    <?php // echo $form->field($model, 'start_date') ?>

    <?php // echo $form->field($model, 'end_date') ?>

    <?php // echo $form->field($model, 'update_date') ?>

    <?php // echo $form->field($model, 'assigned_to') ?>

    <?php // echo $form->field($model, 'inventory') ?>

    <?php // echo $form->field($model, 'comments') ?>

    <?php // echo $form->field($model, 'classroom') ?>

    <?php // echo $form->field($model, 'classroom_other') ?>

    <?php // echo $form->field($model, 'course_code') ?>

    <?php // echo $form->field($model, 'setup_time') ?>

    <?php // echo $form->field($model, 'pickup_time') ?>

    <?php // echo $form->field($model, 'scheduled_start_time') ?>

    <?php // echo $form->field($model, 'scheduled_end_time') ?>

    <?php // echo $form->field($model, 'status') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
