<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestCableLock */

$this->title = 'Create Tbl Asset Test Cable Lock';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Asset Test Cable Locks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-cable-lock-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
