<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTestRemote */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Asset Test Remotes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-remote-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Asset Test Remote', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'inventory_id',
            'test_power_button',
            'enter_menu_options',
            'make_screen_blank_button',
            // 'choose_source_button',
            // 'test_battery_1',
            // 'test_battery_2',
            // 'battery_type:ntext',
            // 'up_elt_mount_remote',
            // 'down_elt_mount_remote',
            // 'stop_elt_mount_remote',
            // 'created_date',
            // 'update_date',
            // 'service_period',
            // 'status',
            // 'comment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
