<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\TblClassroomSetup;
?>  

               
<?= Html::a($model->classroomName. '  &nbsp;&nbsp;    '.$model->scheduled_start_time. '  -  '.$model->scheduled_end_time .'   &raquo;' ,['/tbl-classroom-setup/view','id'=>$model->form_id],['class'=>'btn btn-default']);?> 


