<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestRemote */

$this->title = "Asset Test Remote #".$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = ['label' => 'Remotes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-remote-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'inventory_id',
            'test_power_button',
            'enter_menu_options',
            'make_screen_blank_button',
            'choose_source_button',
            'test_battery_1',
            'test_battery_2',
            'battery_type:ntext',
            'up_elt_mount_remote',
            'down_elt_mount_remote',
            'stop_elt_mount_remote',
            'created_date:datetime',
            'update_date:datetime',
            'service_period',
            'status',
            'comment',
        ],
    ]) ?>

</div>
