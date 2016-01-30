<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblClassroom */

$this->title = 'Create Classroom';
$this->params['breadcrumbs'][] = ['label' => 'Classrooms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-classroom-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
