<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\TblClassroom;
use common\models\TblCourses;;

/* @var $this yii\web\View */
/* @var $model common\models\TblClassroomSetup */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-classroom-setup-form">

    <?php $form = ActiveForm::begin(); ?>

    <!--?= $form->field($model, 'user_id')->textInput() ?>

    <!?= $form->field($model, 'form_type')->textInput() ?-->

    <?= $form->field($model, 'setup_type')->textInput() ?>

    <?= $form->field($model, 'setup_other')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'closed_by')->textInput() ?>

    <?= $form->field($model, 'start_date')->widget(\yii\jui\DatePicker::classname(),[
    'language'=>'eng',
    'dateFormat'=>'yyyy-MM-dd']) ?>
    <!--?= $form->field($model, 'start_date')->widget(\yii\jui\DatePicker::classname(), [
    'language' => 'eng',
    'dateFormat' => 'yyyy-MM-dd',
]) ?-->


    <?= $form->field($model, 'end_date')->widget(\yii\jui\DatePicker::classname(),[
    'language'=>'eng',
    'dateFormat'=>'yyyy-MM-dd']) ?>

    <?= $form->field($model, 'update_date')->widget(\yii\jui\DatePicker::classname(),[
    'language'=>'eng',
    'dateFormat'=>'yyyy-MM-dd']) ?>

    <?= $form->field($model, 'assigned_to')->textInput() ?>

    <?= $form->field($model, 'inventory')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comments')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'classroom')->dropDownList(
            ArrayHelper::map(TblClassroom::find()->all(), 'id','classroom_name'),
            ['prompt'=>'Select Classroom']
            )?>

    <?= $form->field($model, 'classroom_other')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'course_code')->dropDownList(
            ArrayHelper::map(TblCourses::find()->all(), 'id','course_name','course_code'),
            ['prompt'=>'Select Course']
            )?>

    <?= $form->field($model, 'setup_time')->widget(\yii\jui\DatePicker::classname(),[
    'language'=>'eng',
    'dateFormat'=>'yyyy-MM-dd']) ?>
    <?= $form->field($model, 'pickup_time')->textInput() ?>

    <?= $form->field($model, 'scheduled_start_time')->widget(\yii\jui\DatePicker::classname(),[
    'language'=>'eng',
    'dateFormat'=>'yyyy-MM-dd']) ?>

    <?= $form->field($model, 'scheduled_end_time')->widget(\yii\jui\DatePicker::classname(),[
    'language'=>'eng',
    'dateFormat'=>'yyyy-MM-dd']) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
