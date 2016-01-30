<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblExternalUser */

$this->title = 'Update Tbl External User: ' . ' ' . $model->external_user;
$this->params['breadcrumbs'][] = ['label' => 'Tbl External Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->external_user, 'url' => ['view', 'id' => $model->external_user]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-external-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
