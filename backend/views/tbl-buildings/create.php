<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblBuildings */

$this->title = 'Create Tbl Buildings';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Buildings', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-buildings-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
