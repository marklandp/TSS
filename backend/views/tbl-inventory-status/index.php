<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblInventoryStatus */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Inventory Statuses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-inventory-status-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Inventory Status', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'inventory_type',
            'user_current_stock',
            'generated_current_stock',
            'inventory_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
