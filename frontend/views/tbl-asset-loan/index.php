<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetLoan */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ' Asset Loans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-loan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  //echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Asset Loan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'entry_id',
            //'form_id',
           // 'user_id',
            'useR.username',
          //  'form_type',
          //  'closed_by',
            // 'start_date:date',
            // 'end_date:date',
            // 'update_date:date',
             'assigned_to',
            'inventory',
            // 'purpose',
            // 'purpose_other:ntext',
            // 'comments',
            //'external_user',
            //'$data->a.\' \'.$data->b.\' \'.$data
            'columns'=>array(
                'label'=>' Borrowed By',
                'value'=> function (){
                    return ' ';
                }),
            'externalUser.first_name',
            'externalUser.last_name',
             'expected_return:date',
             'loan_date:date',
            'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
