<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblPermissions */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Permissions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-permissions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Permissions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'role',
            'controller_name',
            'action',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
