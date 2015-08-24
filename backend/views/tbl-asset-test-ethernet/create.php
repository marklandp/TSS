<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestEthernet */

$this->title = 'Create Tbl Asset Test Ethernet';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Asset Test Ethernets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-ethernet-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
