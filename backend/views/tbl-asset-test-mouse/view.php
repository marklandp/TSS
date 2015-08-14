<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\TblAssetTestMouse */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tbl Asset Test Mice', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-test-mouse-view">

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
            'inventory_id',
            'type',
            'check_left_button',
            'check_right_button',
            'check_scroll_wheel',
            'created_date',
            'update_date',
            'service_period',
            'status',
            'comment',
        ],
    ]) ?>

</div>
