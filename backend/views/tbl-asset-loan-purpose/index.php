<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetLoanPurpose */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tbl Asset Loan Purposes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-loan-purpose-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tbl Asset Loan Purpose', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'purpose',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
