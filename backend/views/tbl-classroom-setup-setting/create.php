<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblClassroomSetupSetting */

$this->title = 'Create Tbl Classroom Setup Setting';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Classroom Setup Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-classroom-setup-setting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
