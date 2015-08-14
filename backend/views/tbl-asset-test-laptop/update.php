<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestLaptop */

$this->title = 'Update Tbl Asset Test Laptop: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Asset Test Laptops', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-asset-test-laptop-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
