<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblInventoryConsumablesDetails */

$this->title = 'Create Tbl Inventory Consumables Details';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Inventory Consumables Details', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-inventory-consumables-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
