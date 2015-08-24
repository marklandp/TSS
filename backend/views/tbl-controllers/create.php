<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblControllers */

$this->title = 'Create Tbl Controllers';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Controllers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-controllers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
