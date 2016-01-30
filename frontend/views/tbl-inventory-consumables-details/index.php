<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblInventoryConsumablesDetails */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Inventory Consumables Details';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-inventory-consumables-details-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Inventory Consumables Details', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'inventory_id',
            'added_quantity',
            'type',
            'date',
            // 'user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
