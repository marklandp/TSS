<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTestClassroom */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Classrooms';
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-classroom-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Asset Test (Classroom)', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'inventory_id',
            ['value'=>'tagName.classroom_name',
             'label'=>'Classroom'],
            //'test_electrical_socket',
            ['value'=>'elecSocket.status_name',
             'label'=>'Test Electric Sockets'],
            //'test_vga_socket',
            ['value'=>'vgaSocket.status_name',
             'label'=>'Test Vga Socket'],
            //'test_audio_and_video_ports',
            ['value'=>'avPorts.status_name',
             'label'=>'Test AV Ports'],
            //'test_ethernet_port_1',
            ['value'=>'etherNet1.status_name',
             'label'=>'Test Ethernet Port 1'],
            //'test_ethernet_port_2',
            ['value'=>'etherNet2.status_name',
             'label'=>'Test Ethernet Port 2'],
           //'check_retractable_screen',
           ['value'=>'retractScreen.status_name',
             'label'=>'Check Retractable Screen'],
            //'check_projector_retraction',
            ['value'=>'retractProjector.status_name',
             'label'=>'Check Projector Retraction'],
            //'check_projector',
            ['value'=>'projectOr.status_name',
             'label'=>'Check Projector'],
            //'check_projector_alignment',
            ['value'=>'projectorAlign.status_name',
             'label'=>'Check Projector Alignment'],
            'total_projector_bulb_life',
            'total_bulb_life_used',
            'total_bulb_life_remaining',
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
