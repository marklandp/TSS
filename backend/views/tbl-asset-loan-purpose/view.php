<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetLoanPurpose */

$this->title = "Asset Loan Purpose #".$model->id;
$this->params['breadcrumbs'][] = ['label' => 'Settings'];
$this->params['breadcrumbs'][] = ['label' => 'Configurations', 'url' => ['/site/confg']];
$this->params['breadcrumbs'][] = ['label' => 'Asset Loan Purposes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-loan-purpose-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'purpose',
        ],
    ]) ?>

</div>
