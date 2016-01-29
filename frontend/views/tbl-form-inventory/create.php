<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblInventory */

$this->title = 'Create Tbl Inventory';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Inventories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-inventory-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
