<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblEmailList */

$this->title = 'Update Tbl Email List: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Email Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-email-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
