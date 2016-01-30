<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblStatuses */

$this->title = 'Create Tbl Statuses';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-statuses-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
