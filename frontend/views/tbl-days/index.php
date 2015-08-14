<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblDays */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Days';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-days-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Days', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'day:ntext',
            'index',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
