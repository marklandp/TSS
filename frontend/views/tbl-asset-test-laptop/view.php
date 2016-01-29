<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestLaptop */

$this->title = "Asset Test Laptop #".$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = ['label' => 'Laptops', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-laptop-view">

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
            'update_standard_software',
            'apply_os_patches',
            'update_antivirus',
            'update_anti_spyware',
            'run_anti_virus_scan',
            'run_anti_spyware_scan',
            'run_chkdsk',
            'run_disk_cleanup',
            'run_disk_defragmenter',
            'check_all_buttons',
            'check_touchpad',
            'check_volume_buttons',
            'check_internal_mic',
            'check_internal_speakers',
            'check_all_ports',
            'test_adapter',
            'charger_laptop',
            'turn_off_sleep',
            'clean_laptop_monthly',
            'date_created:date',
            'update_date:date',
            'service_period',
            'status',
            'comment',
        ],
    ]) ?>

</div>
