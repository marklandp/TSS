<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblExternalUser */

$this->title = 'Create Tbl External User';
$this->params['breadcrumbs'][] = ['label' => 'Tbl External Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-external-user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
