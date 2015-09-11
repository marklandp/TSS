<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblPermissions */

$this->title = 'Create Tbl Permissions';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Permissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-permissions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
