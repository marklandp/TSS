<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTranslation */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Translations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="translation-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Translation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'message',
            'translation',
            'language',
            'category',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
