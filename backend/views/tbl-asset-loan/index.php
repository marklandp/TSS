<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetLoan */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Asset Loans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-loan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Asset Loan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'entry_id',
            'form_id',
            'user_id',
            'form_type',
            'closed_by',
            // 'start_date',
            // 'end_date',
            // 'update_date',
            // 'assigned_to',
            // 'inventory',
            // 'purpose',
            // 'purpose_other:ntext',
            // 'comments',
            // 'external_user',
            // 'expected_return',
            // 'loan_date',
            // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
