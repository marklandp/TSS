<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblTonerInventory */

$this->title = 'Create Tbl Toner Inventory';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Toner Inventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-toner-inventory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
