<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblControllers */

$this->title = 'Update Tbl Controllers: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Controllers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-controllers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
