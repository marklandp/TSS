<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblBuildings */

$this->title = 'Update Tbl Buildings: ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Buildings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-buildings-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
