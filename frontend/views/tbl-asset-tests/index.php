<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTests */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Asset Tests';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-tests-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Asset Tests', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'inventory_type',
            'test_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
