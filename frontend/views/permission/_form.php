<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Permission */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="permission-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'principal_id')->textInput() ?>

    <?= $form->field($model, 'subordinate_id')->textInput() ?>

    <?= $form->field($model, 'type')->dropDownList([ 'user' => 'User', 'role' => 'Role', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'action')->textInput() ?>

    <?= $form->field($model, 'controller')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'template')->textInput() ?>

    <?= $form->field($model, 'comment')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
