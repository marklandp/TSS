<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\web\UrlManager;


/* @var $this yii\web\View */
/* @var $searchModel common\models\SearchTblAssetTestCableLock */
/* @var $dataProvider yii\data\ActiveDataProvider */

/* @var $this yii\web\View */


$this->title = 'Asset Tests';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-index">
	<div class="jumbotron">
         <h1>Asset Test</h1>
 </div>
 
<div class="body-content">
    <div class="btn-group btn-group-justified">
<?= Html::a('Cable Lock', ['/tbl-asset-test-classroom/index'], ['class'=>'btn btn-primary']) ?>
<?= Html::a('Classroom',['/tbl-asset-test-classroom/index'],['class'=>'btn btn-primary'])?>
  <a href="/tbl-asset-test-clicker/index" class="btn btn-primary">Clicker</a>
</div>
      <div class="btn-group btn-group-justified">
      <div class="btn-group">
        <button type="button" class="btn btn-primary">Apple</button>
        <button type="button" class="btn btn-primary">Apple</button>
        <button type="button" class="btn btn-primary">Apple</button>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-primary">Samsung</button>
        <button type="button" class="btn btn-primary">Apple</button>
        <button type="button" class="btn btn-primary">Apple</button>
      </div>
      <div class="btn-group">
        <button type="button" class="btn btn-primary btn-block">Apple</button>
        <button type="button" class="btn btn-primary">Sony</button>
        <button type="button" class="btn btn-primary">Apple</button>
      </div>
    
</div>

</div>

