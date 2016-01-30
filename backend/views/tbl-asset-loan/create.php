<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TblAssetLoan */

$this->title = 'Create ';
$this->params['breadcrumbs'][] = ['label' => 'Asset Loans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tbl-asset-loan-create">

    <h1><?= Html::encode($this->title) ?></h1>
	<?= $this->render('_form', [
	        'model' => $model,
	        'external'=> $external,
	    ]) ?>
</div>
