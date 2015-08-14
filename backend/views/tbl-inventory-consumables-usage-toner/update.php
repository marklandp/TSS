<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblInventoryConsumablesUsageToner */

$this->title = 'Update Tbl Inventory Consumables Usage Toner: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Inventory Consumables Usage Toners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-inventory-consumables-usage-toner-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
