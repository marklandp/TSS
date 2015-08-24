<?php

namespace backend\controllers;

use Yii;
use common\models\Permission;
use common\models\SearchPermission;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PermissionController implements the CRUD actions for Permission model.
 */
class PermissionController extends Controller
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
     * Lists all Permission models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SearchPermission();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Permission model.
     * @param integer $principal_id
     * @param integer $subordinate_id
     * @param string $type
     * @param integer $action
     * @return mixed
     */
    public function actionView($principal_id, $subordinate_id, $type, $action)
    {
        return $this->render('view', [
            'model' => $this->findModel($principal_id, $subordinate_id, $type, $action),
        ]);
    }

    /**
     * Creates a new Permission model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Permission();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'principal_id' => $model->principal_id, 'subordinate_id' => $model->subordinate_id, 'type' => $model->type, 'action' => $model->action]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Permission model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $principal_id
     * @param integer $subordinate_id
     * @param string $type
     * @param integer $action
     * @return mixed
     */
    public function actionUpdate($principal_id, $subordinate_id, $type, $action)
    {
        $model = $this->findModel($principal_id, $subordinate_id, $type, $action);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'principal_id' => $model->principal_id, 'subordinate_id' => $model->subordinate_id, 'type' => $model->type, 'action' => $model->action]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Permission model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $principal_id
     * @param integer $subordinate_id
     * @param string $type
     * @param integer $action
     * @return mixed
     */
    public function actionDelete($principal_id, $subordinate_id, $type, $action)
    {
        $this->findModel($principal_id, $subordinate_id, $type, $action)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Permission model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $principal_id
     * @param integer $subordinate_id
     * @param string $type
     * @param integer $action
     * @return Permission the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($principal_id, $subordinate_id, $type, $action)
    {
        if (($model = Permission::findOne(['principal_id' => $principal_id, 'subordinate_id' => $subordinate_id, 'type' => $type, 'action' => $action])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
