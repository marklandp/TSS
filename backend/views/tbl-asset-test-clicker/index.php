<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTestClicker */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Asset Test Clickers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-clicker-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Asset Test Clicker', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'inventory_id',
            'test_previous_button',
            'test_next_button',
            'test_laser_pointer',
            // 'test_battery_1',
            // 'test_battery_2',
            // 'battery_type:ntext',
            // 'created_date',
            // 'update_date',
            // 'service_period',
            // 'status',
            // 'comment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
