<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTestKeyboard */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Keyboards';
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-keyboard-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Asset Test (Keyboard)', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'inventory_id',
            ['value'=>'tagName.tag',
             'label'=>'Tag'],
            //'type',
            //'check_keys',
            //'created_date:date',
            // 'update_date:date',
            // 'service_period',
            //'status',
            ['value'=>'statuS.status_name',
             'label'=>'status'],
            'comment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
