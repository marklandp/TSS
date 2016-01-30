<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblPermissions */

$this->title = 'Update Tbl Permissions: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Permissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-permissions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
