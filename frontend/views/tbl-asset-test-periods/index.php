<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTestPeriods */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Asset Test Periods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-periods-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Asset Test Periods', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'periods',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
