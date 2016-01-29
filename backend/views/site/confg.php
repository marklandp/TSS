<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Configurations';
$this->params['breadcrumbs'][] = ['label' => 'Settings'];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-configuraitons">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="site-body">

    <div class = "nav">	
	<?= Html::a('Asset Loan Purpose', ['/tbl-asset-loan-purpose/index'], ['class'=>'btn btn-primary']) ?>
    <?= Html::a('Asset Loan Status', ['/tbl-asset-loan-status/index'], ['class'=>'btn btn-primary']) ?>
    <?= Html::a('Courses', ['/tbl-courses/index'], ['class'=>'btn btn-primary']) ?>
    <?= Html::a('Classroom Setup Type', ['/tbl-classroom-setup-type/index'], ['class'=>'btn btn-primary']) ?>
    <?= Html::a('External User Information',['/tbl-external-user/index'],['class'=>'btn btn-primary']) ?> 
    <?= Html::a('Roles',['/role/index'], ['class'=>'btn btn-primary']) ?>
    <?= Html::a('Buildings',['/tbl-buildings/index'], ['class'=>'btn btn-primary']) ?>
     <?= Html::a('Statuses',['/tbl-statuses/index'],['class'=>'btn btn-primary'])?>
    </div>


    </div>
    

</div>