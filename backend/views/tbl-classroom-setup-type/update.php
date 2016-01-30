<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblClassroomSetupType */

$this->title = 'Update Classroom Setup Type: #' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Settings'];
$this->params['breadcrumbs'][] = ['label' => 'Configurations', 'url' => ['/site/confg']];
$this->params['breadcrumbs'][] = ['label' => 'Classroom Setup Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Classroom Setup Type: #'.$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-classroom-setup-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
