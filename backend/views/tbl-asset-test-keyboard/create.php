<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestKeyboard */

$this->title = 'Create Tbl Asset Test Keyboard';
$this->params['breadcrumbs'][] = ['label' => 'Tbl Asset Test Keyboards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-keyboard-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
