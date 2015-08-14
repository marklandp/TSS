<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblDays */

$this->title = 'Create Tbl Days';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Days', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-days-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
