<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblInventoryConsumablesUsageToner */

$this->title = 'Create Tbl Inventory Consumables Usage Toner';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Inventory Consumables Usage Toners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-inventory-consumables-usage-toner-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
