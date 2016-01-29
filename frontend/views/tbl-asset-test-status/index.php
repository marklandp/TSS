<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTestStatus */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Asset Test Statuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-status-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Asset Test Status', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'form_id',
            'user_id',
            'form_type',
            'closed_by',
            'start_date',
            // 'end_date',
            // 'assigned_to',
            // 'inventory',
            // 'status',
            // 'asset_test',
            // 'comments',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
