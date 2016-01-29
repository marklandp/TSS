<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblInventoryType */

$this->title = 'Update Tbl Inventory Type: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Inventory Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-inventory-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
