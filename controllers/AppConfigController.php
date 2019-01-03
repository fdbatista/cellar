<?php

namespace app\controllers;

use Yii;
use app\models\AppConfig;
use app\models\search\AppConfigSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AppConfigController implements the CRUD actions for AppConfig model.
 */
class AppConfigController extends Controller {

    /**
     * {@inheritdoc}
     */
    public function behaviors() {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all AppConfig models.
     * @return mixed
     */
    public function actionIndex() {
        return $this->render('view', ['model' => $this->findModel(1)]);
    }

    /**
     * Updates an existing AppConfig model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate() {
        $model = $this->findModel(1);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->actionIndex();
        }

        return $this->render('update', [
                    'model' => $model,
        ]);
    }

    /**
     * Finds the AppConfig model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AppConfig the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id) {
        if (($model = AppConfig::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

}
