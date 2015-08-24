<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\TblClassroomSetupSetting */

$this->title = 'Update Tbl Classroom Setup Setting: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Classroom Setup Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tbl-classroom-setup-setting-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
