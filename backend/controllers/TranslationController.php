<?php

namespace backend\controllers;

use Yii;
use common\models\Translation;
use common\models\SearchTranslation;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TranslationController implements the CRUD actions for Translation model.
 */
class TranslationController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Translation models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchTranslation();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Translation model.
     * @param string $message
     * @param string $language
     * @param string $category
     * @return mixed
     */
    public function actionView($message, $language, $category)
    {
        return $this->render('view', [
            'model' => $this->findModel($message, $language, $category),
        ]);
    }

    /**
     * Creates a new Translation model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Translation();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'message' => $model->message, 'language' => $model->language, 'category' => $model->category]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Translation model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $message
     * @param string $language
     * @param string $category
     * @return mixed
     */
    public function actionUpdate($message, $language, $category)
    {
        $model = $this->findModel($message, $language, $category);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'message' => $model->message, 'language' => $model->language, 'category' => $model->category]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Translation model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $message
     * @param string $language
     * @param string $category
     * @return mixed
     */
    public function actionDelete($message, $language, $category)
    {
        $this->findModel($message, $language, $category)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Translation model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $message
     * @param string $language
     * @param string $category
     * @return Translation the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($message, $language, $category)
    {
        if (($model = Translation::findOne(['message' => $message, 'language' => $language, 'category' => $category])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
