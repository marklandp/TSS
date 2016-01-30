<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblClassroomSetupType */

$this->title = 'Create Classroom Setup Type';
$this->params['breadcrumbs'][] = ['label' => 'Settings'];
$this->params['breadcrumbs'][] = ['label' => 'Configurations', 'url' => ['/site/confg']];
$this->params['breadcrumbs'][] = ['label' => 'Classroom Setup Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-classroom-setup-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
