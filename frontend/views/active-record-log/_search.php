<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchActiveRecordLog */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="active-record-log-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'action') ?>

    <?= $form->field($model, 'model') ?>

    <?= $form->field($model, 'idModel') ?>

    <?= $form->field($model, 'field') ?>

    <?php // echo $form->field($model, 'From') ?>

    <?php // echo $form->field($model, 'To') ?>

    <?php // echo $form->field($model, 'creationdate') ?>

    <?php // echo $form->field($model, 'userid') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
