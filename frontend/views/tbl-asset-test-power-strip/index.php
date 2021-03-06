<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTestPowerStrip */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Power Strips';
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-power-strip-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Asset Test (Power Strip)', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'inventory_id',
            ['value'=>'tagName.tag',
             'label'=>'Tag'],
            //'check_prongs',
            ['value'=>'pRongs.status_name',
             'label'=>'Check Prongs'],
            //'check_power_indicator',
            ['value'=>'pwrInd.status_name',
             'label'=>'Check Power Indicator'],
            //'check_sockets',
            ['value'=>'socKets.status_name',
             'label'=>'Check Sockets'],
            // 'length',
            // 'created_date:date',
            // 'update_date:date',
            // 'service_period',
            // 'status',
            ['value'=>'statuS.status_name',
             'label'=>'status'],
            'comment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
