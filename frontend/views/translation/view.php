<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Translation */

$this->title = $model->message;
$this->params['breadcrumbs'][] = ['label' => 'Translations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="translation-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'message' => $model->message, 'language' => $model->language, 'category' => $model->category], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'message' => $model->message, 'language' => $model->language, 'category' => $model->category], [
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
            'message',
            'translation',
            'language',
            'category',
        ],
    ]) ?>

</div>
