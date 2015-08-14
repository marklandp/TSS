<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestLaptopBag */

$this->title = 'Create Tbl Asset Test Laptop Bag';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Asset Test Laptop Bags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-laptop-bag-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
