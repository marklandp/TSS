<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestClicker */

$this->title = 'Create Tbl Asset Test Clicker';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Asset Test Clickers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-clicker-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
