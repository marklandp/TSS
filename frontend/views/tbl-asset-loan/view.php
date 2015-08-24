<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetLoan */

$this->title = "View Asset Loan #".$model->entry_id;
$this->params['breadcrumbs'][] = ['label' => 'Asset Loans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-loan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->entry_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->entry_id], [
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
           // 'entry_id',
           // 'form_id',
            'user_id',
          //  'form_type',
            'closed_by',
          //  'start_date',
          //  'end_date',
            'update_date',
            'assigned_to',
            'inventory',
            'purpose',
            'purpose_other:ntext',
            'comments',
            'external_user',
            'expected_return',
            'loan_date',
            'status',
        ],
    ]) ?>

</div>
