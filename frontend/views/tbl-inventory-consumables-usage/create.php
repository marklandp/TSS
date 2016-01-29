<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblInventoryConsumablesUsage */

$this->title = 'Create Tbl Inventory Consumables Usage';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Inventory Consumables Usages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-inventory-consumables-usage-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
