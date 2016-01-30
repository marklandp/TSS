<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use common\models\TblClassroomSetup;
use common\models\TblAssetLoan;
$this->title = 'MSBM Technical Support System';
?>
<div class="site-index">

    <div class="jumbotron">
       
        <h1>Welcome To TSS!</h1>

        <p class="lead">Mona School of Business and Management's Technical Support System.</p>

       </img> <!-- <img class="media-object" src="images/logo.png" alt=""><p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
   --> </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-8">
                <h2  style="background-color:#101010; padding:3px; color:white;">Classrooms</h2>
               <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
                <?= ListView::widget([
				    'dataProvider' => $dataProvider,
				    'itemView'=>'_classitem',
				 
				]); ?>
                <br>
                <p><?= Html::a('Go to Setups &raquo;', ['/tbl-classroom-setup/index'] , ['class'=>'btn btn-default'])?>
                <!--a class="btn btn-default" href=" ">Go to Setups &raquo;</a--></p>
            </div>
            <div class="col-lg-4">
                <h2  style="background-color:#101010; padding:3px; color:white;">Asset Tests</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
                

                <p><?= Html::a('Go to Asset Test &raquo;', ['/site/asset'] , ['class'=>'btn btn-default'])?>
                <!--a class="btn btn-default" href=" ">Go to Asset Test &raquo;</a--></p>
            </div>
            <div class="col-lg-4">
                <h2  style="background-color:#101010; padding:3px; color:white;">Asset Loans</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>
                 <?= ListView::widget([
                    'dataProvider' => $dataProvider1,
                    'itemView'=>'_loanitem',
                 
                ]); ?>       
                <br>
                <p><?= Html::a('Go to Asset Loans &raquo;', ['/tbl-asset-loan/index'] , ['class'=>'btn btn-default'])?>
                <!--a class="btn btn-default" href=" ">Go to Asset Loans &raquo;</a--></p>
            </div>
            
        </div>

    </div>
</div>
