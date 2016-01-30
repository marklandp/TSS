<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblTonerInventory */

$this->title = 'Update Tbl Toner Inventory: ' . ' ' . $model->form_id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Toner Inventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->form_id, 'url' => ['view', 'id' => $model->form_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-toner-inventory-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
