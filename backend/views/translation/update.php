<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Translation */

$this->title = 'Update Translation: ' . ' ' . $model->message;
$this->params['breadcrumbs'][] = ['label' => 'Translations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->message, 'url' => ['view', 'message' => $model->message, 'language' => $model->language, 'category' => $model->category]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="translation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
