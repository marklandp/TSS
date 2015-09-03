<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblCourses */

$this->title = 'Update Tbl Courses: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-courses-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
