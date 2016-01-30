<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use common\models\TblClassroomSetup;
use common\models\SearchTblClassroomSetup;
use common\models\TblAssetLoan;
use common\models\SearchTblAssetLoan;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                    [
                        'actions'=>['confg'],
                        'allow'=>true,
                        'roles'=>['@'],
                        ],
                        [
                        'actions'=>['asset'],
                        'allow'=>true,
                        'roles'=>['@'],
                        ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new SearchTblClassroomSetup();
        $searchModel1 = new SearchTblAssetLoan();
        $dataProvider = $searchModel->search(['SearchTblClassroomSetup'=>['status'=>'open']]);
        $dataProvider1 = $searchModel1->search(['SearchTblAssetLoan'=>['status'=>'open']]);

        $model = new TblClassroomSetup();
        $model1 = new TblAssetLoan();
        return $this->render('index', ['searchModel'=>$searchModel, 'dataProvider'=>$dataProvider, 'model'=>$model
            ,'searchModel1'=>$searchModel1, 'dataProvider1'=>$dataProvider1,'model1'=>$model1]);
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Configurations Page
     * @return mixed
     */
    public function actionConfg()
    {
        return $this->render('confg');
    }


     /**
     * Configurations Page
     * @return mixed
     */
    public function actionAsset()
    {
        return $this->render('asset');
    }

}
