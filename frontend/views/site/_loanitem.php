<?php 
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use common\models\TblAssetLoan;
?>

               
<?= Html::a($model->externalUser['first_name']. ' '.$model->externalUser['last_name']. '  &nbsp;&nbsp;    '.date('F dS, Y',$model->loan_date). '    &nbsp;&nbsp;    '.($model->statuS['status_name']) .'   &raquo;' ,['/tbl-asset-loan/view','id'=>$model->entry_id],['class'=>'btn btn-default']);?> 


