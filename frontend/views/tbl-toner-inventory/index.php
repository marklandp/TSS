<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblTonerInventory */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Toner Inventories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-toner-inventory-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Toner Inventory', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'form_id',
            'user_id',
            'form_type',
            'color:ntext',
            'tag',
            // 'closed_by',
            // 'start_date',
            // 'end_date',
            // 'assigned_to',
            // 'inventory',
            // 'comments',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
