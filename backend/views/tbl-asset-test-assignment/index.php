<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTestAssignment */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Asset Test Assignments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-assignment-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Asset Test Assignment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'inventory_item',
            'user',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
