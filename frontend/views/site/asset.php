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
<?= Html::a('Test Period',["/tbl-asset-test-periods/index"],['class'=>'btn btn-primary btn-block'])?>

 </div>
 
<div class="body-content">
    <div class="btn-group btn-group-justified">
    <?= Html::a('<span class="glyphicon glyphicon-minus"></span> Cable Lock', ['/tbl-asset-test-cable-lock/index'], ['class'=>'btn btn-primary']) ?>
    <?= Html::a('<span class="glyphicon glyphicon-minus"></span> Classroom',['/tbl-asset-test-classroom/index'],['class'=>'btn btn-primary'])?>
    <?= Html::a('<span class="glyphicon glyphicon-minus"></span> Clicker',["/tbl-asset-test-clicker/index"],['class'=>'btn btn-primary'])?>
    </div>

      <div class="btn-group btn-group-justified">
        <?= Html::a('<span class="glyphicon glyphicon-ok"></span> Ethernet',["/tbl-asset-test-ethernet/index"],['class'=>'btn btn-primary'])?>
        <?= Html::a('Keyboard',["/tbl-asset-test-keyboard/index"],['class'=>'btn btn-primary'])?>
        <?= Html::a('Laptop',["/tbl-asset-test-laptop/index"],['class'=>'btn btn-primary'])?>
      </div>
      <div class="btn-group btn-group-justified">
       <?= Html::a('Laptop Bag',["/tbl-asset-test-laptop-bag/index"],['class'=>'btn btn-primary'])?>
       <?= Html::a('Mouse',["/tbl-asset-test-mouse/index"],['class'=>'btn btn-primary'])?>
       <?= Html::a('Power Extension',["/tbl-asset-test-power-extension/index"],['class'=>'btn btn-primary'])?>
      </div>
      <div class="btn-group btn-group-justified">
        <?= Html::a('Power Strip',["/tbl-asset-test-power-strip/index"],['class'=>'btn btn-primary'])?>
        <?= Html::a(' Projector',["/tbl-asset-test-projector/index"],['class'=>'btn btn-primary'])?>
        <?= Html::a('Remote',["/tbl-asset-test-remote/index"],['class'=>'btn btn-primary'])?>
      </div>
 
    <div class="btn-group btn-group-justified">
        <?= Html::a('Speaker',["/tbl-asset-test-speaker/index"],['class'=>'btn btn-primary'])?>
        <?= Html::a(' Vga',["/tbl-asset-test-vga/index"],['class'=>'btn btn-primary'])?>
       </div>

</div>
</div>

