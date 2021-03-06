<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestEthernet */

$this->title = 'Update Asset Test Ethernet : ' . ' #' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Asset Test ', 'url' => ['/site/asset']];
$this->params['breadcrumbs'][] = ['label' => 'Ethernets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => "Asser Test Ethernets #".$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-asset-test-ethernet-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
