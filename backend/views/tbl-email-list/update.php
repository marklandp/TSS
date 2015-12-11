<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblEmailList */

$this->title = 'Email #' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Settings'];
$this->params['breadcrumbs'][] = ['label' => 'Configurations', 'url' => ['/site/confg']];
$this->params['breadcrumbs'][] = ['label' => 'Email Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Email #'.$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-email-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
