<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestClassroom */

$this->title = "Asset Test Classroom #".$model->id;
$this->params['breadcrumbs'][] = ['label' => ' Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = ['label' => ' Classrooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-classroom-view">

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
            'test_electrical_socket',
            'test_vga_socket',
            'test_audio_and_video_ports',
            'test_ethernet_port_1',
            'test_ethernet_port_2',
            'check_retractable_screen',
            'check_projector_retraction',
            'check_projector',
            'check_projector_alignment',
            'total_projector_bulb_life',
            'total_bulb_life_used',
            'total_bulb_life_remaining',
            'created_date:date',
            'update_date:date',
            'service_period',
            'status',
            'comment',
        ],
    ]) ?>

</div>
