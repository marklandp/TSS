<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTestMouse */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ' Mice';
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-mouse-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Asset Test (Mouse)', ['create'], ['class' => 'btn btn-success']) ?>
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
            //'type',
            //'check_left_button',
             ['value'=>'leftBtn.status_name',
             'label'=>'check_left_button'],
            //'check_right_button',
            ['value'=>'rightBtn.status_name',
             'label'=>'check_right_button'],
            // 'check_scroll_wheel',
            ['value'=>'checkWheel.status_name',
             'label'=>'Check Scroll Wheel'],
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
