<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTestEthernet */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ethernets';
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-ethernet-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Asset Test (Ethernet)', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'test_cable',
           // 'check_connector_tag_side',
            ['value'=>'connectorTag.status_name',
             'label'=>'Check Tag Side'],
           // 'check_connector_far_side',
           ['value'=>'connectorFar.status_name',
             'label'=>'Check Far Side'],
            // 'length',
            // 'created_date:date',
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
