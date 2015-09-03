<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblClassroomConfSetupSetting */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Classroom Conf Setup Settings';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-classroom-conf-setup-setting-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Classroom Conf Setup Setting', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'inventory_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
