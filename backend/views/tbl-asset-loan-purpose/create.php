<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblAssetLoanPurpose */

$this->title = 'Create ';
$this->params['breadcrumbs'][] = ['label' => 'Settings'];
$this->params['breadcrumbs'][] = ['label' => 'Configurations', 'url' => ['/site/confg']];
$this->params['breadcrumbs'][] = ['label' => 'Asset Loan Purposes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-loan-purpose-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
