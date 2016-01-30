<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\TblAssetLoanPurpose;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetLoan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-asset-loan-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--?= $form->field($model, 'form_id')->textInput() ?-->

    <!--?= $form->field($model, 'user_id')->textInput() ?-->

    <!--?= $form->field($model, 'form_type')->textInput() ?-->

    <?= $form->field($model, 'external_user')->textInput(['style'=>'width:30%;']) ?>

    <?= $form->field($external, 'id_number')->textInput(['style'=>'width:30%;']) ?>

    <?= $form->field($external, 'first_name')->textarea(['rows' => 1, 'style'=>'width:30%;']) ?>

    <?= $form->field($external, 'last_name')->textarea(['rows' => 1, 'style'=>'width:30%;']) ?>

    <!--?= $form->field($external, 'status')->textInput() ?-->

    <?= $form->field($external, 'phone_number')->textInput() ?>

    <?= $form->field($external, 'email')->textInput(['maxlength' => true]) ?>


    <!--?= $form->field($model, 'closed_by')->textInput() ?-->

    <!--?= $form->field($model, 'start_date')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'eng',
    'dateFormat' => 'yyyy-MM-dd',
]) ?-->

    <!--?= $form->field($model, 'end_date')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'eng',
    'dateFormat' => 'yyyy-MM-dd',
]) ?-->

    <!--?= $form->field($model, 'update_date')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'eng',
    'dateFormat' => 'yyyy-MM-dd',
]) ?-->

    <?= $form->field($model, 'assigned_to')->textInput() ?>

    <?= $form->field($model, 'inventory')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'purpose')->dropDownList(
            ArrayHelper::map(TblAssetLoanPurpose::find()->all(), 'id','purpose'),
            ['prompt'=>'Select purpose']
            )?>

    <?= $form->field($model, 'purpose_other')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'comments')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'expected_return')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'eng',
    'dateFormat' => 'yyyy-MM-dd',
]) ?>

    <?= $form->field($model, 'loan_date')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'eng',
    'dateFormat' => 'yyyy-MM-dd',
]) ?>

    <!--?= $form->field($model, 'status')->dropDownList(['3' => 'On Loan', '4' => 'Over Due', '5' => 'Missing'])?-->

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
