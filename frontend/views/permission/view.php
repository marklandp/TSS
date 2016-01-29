<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Permission */

$this->title = $model->principal_id;
$this->params['breadcrumbs'][] = ['label' => 'Permissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permission-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'principal_id' => $model->principal_id, 'subordinate_id' => $model->subordinate_id, 'type' => $model->type, 'action' => $model->action], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'principal_id' => $model->principal_id, 'subordinate_id' => $model->subordinate_id, 'type' => $model->type, 'action' => $model->action], [
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
            'principal_id',
            'subordinate_id',
            'type',
            'action',
            'controller:ntext',
            'template',
            'comment:ntext',
        ],
    ]) ?>

</div>
