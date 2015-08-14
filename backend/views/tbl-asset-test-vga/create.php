<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestVga */

$this->title = 'Create Tbl Asset Test Vga';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Asset Test Vgas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-vga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
