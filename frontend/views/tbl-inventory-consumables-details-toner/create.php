<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblInventoryConsumablesDetailsToner */

$this->title = 'Create Tbl Inventory Consumables Details Toner';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Inventory Consumables Details Toners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-inventory-consumables-details-toner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
