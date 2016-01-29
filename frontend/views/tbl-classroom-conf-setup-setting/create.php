<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblClassroomConfSetupSetting */

$this->title = 'Create Tbl Classroom Conf Setup Setting';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Classroom Conf Setup Settings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-classroom-conf-setup-setting-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
