<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Permission */

$this->title = 'Update Permission: ' . ' ' . $model->principal_id;
$this->params['breadcrumbs'][] = ['label' => 'Permissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->principal_id, 'url' => ['view', 'principal_id' => $model->principal_id, 'subordinate_id' => $model->subordinate_id, 'type' => $model->type, 'action' => $model->action]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="permission-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
