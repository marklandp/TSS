<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblClassroom */

$this->title = 'Update Classroom: #' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Classrooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Classroom #'.$model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-classroom-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
