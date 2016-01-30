<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="shortcut icon" href= <?php echo '"'.Yii::$app->request->baseUrl.'/favicon.ico"' ?> type="image/x-icon" />
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'Technical Support System ',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
       
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
    	$menuItems = [
    	['label' => 'Home', 'url' => ['/site/index']],
    	['label' => 'Administration', 'url' => Yii::$app->urlManagerBackend->createUrl('/TSS/backend/web/index')],
        ['label' => 'Forms', 'url'=>'#', 
        'items'=>[
                    ['label'=>'Asset Loan', 'url' => ['/tbl-asset-loan/index']],
                    ['label'=>'Asset Test', 'url' =>['/site/asset']],
                    ['label'=>'Setup', 'url'=>['/tbl-classroom-setup/index']],
                   
                ]
        ],
        ['label'=>'Assets/Inventory','url'=>'#','items'=>[ 
                ['label'=>'Consumables', 'url'=>['/tbl-inventory-consumables/index']],
                ['label'=>'Is Inventory', 'url'=>['/tbl-is-inventory/index']], 
                ]],
       
        ['label'=>'Change Password','url'=>['#']],
       // ['label' => 'Contact', 'url' => ['/site/contact']],
      //  ['label' => 'About', 'url' => ['/site/about']],
        
        
     
    ];
        $menuItems[] = [
	
         'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
            'url' => ['/site/logout'],
            'linkOptions' => ['data-method' => 'post'],


        ];
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; MSBM <?= date('Y') ?></p>
        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
