<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\ActiveRecordLog */

$this->title = 'Create Active Record Log';
$this->params['breadcrumbs'][] = ['label' => 'Active Record Logs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="active-record-log-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
