<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTestCableLock */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cable Locks';
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-cable-lock-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Asset Test (Cable Lock)', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'c heck_keys',
            ['value'=>'keyStatus.status_name',
             'label'=>'Check Keys'],
            //'check_for_damage',
            ['value'=>'damageStatus.status_name',
             'label'=>'Check For Damage'],
            //'check_keys_status',
            //'check_for_damage_status',
            //'date_created:date',
            //'update_date:date',
            //'service_period',
             ['value'=>'statuS.status_name',
             'label'=>'status'],
             'comment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
