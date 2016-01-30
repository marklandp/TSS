<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblInventoryType */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Inventory Types';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-inventory-type-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Inventory Type', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'prefix',
            'test_table',
            'controller',
            // 'setup_loan',
            // 'test_day',
            // 'optimal_storage_level',
            // 'storage_point',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
