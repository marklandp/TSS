<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblInventoryConsumables */

$this->title = 'Create Tbl Inventory Consumables';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Inventory Consumables', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-inventory-consumables-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
