<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblEmailList */

$this->title = 'Create Tbl Email List';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Email Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-email-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
