<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblInventoryConsumablesUsage */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Inventory Consumables Usages';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-inventory-consumables-usage-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Inventory Consumables Usage', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'inventory_id',
            'used_quantity',
            'assigned_to',
            'date',
            // 'user',
            // 'description:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
