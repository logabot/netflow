<?php

namespace app\controllers;

use Yii;
use app\models\TblCount;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CountController implements the CRUD actions for TblCount model.
 */
class CountController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
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
     * Lists all TblCount models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => TblCount::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblCount model.
     * @param string $ip
     * @param string $date
     * @return mixed
     */
    public function actionView($ip, $date)
    {
        return $this->render('view', [
            'model' => $this->findModel($ip, $date),
        ]);
    }

    /**
     * Creates a new TblCount model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new TblCount();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ip' => $model->ip, 'date' => $model->date]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing TblCount model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $ip
     * @param string $date
     * @return mixed
     */
    public function actionUpdate($ip, $date)
    {
        $model = $this->findModel($ip, $date);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'ip' => $model->ip, 'date' => $model->date]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing TblCount model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $ip
     * @param string $date
     * @return mixed
     */
    public function actionDelete($ip, $date)
    {
        $this->findModel($ip, $date)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblCount model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $ip
     * @param string $date
     * @return TblCount the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($ip, $date)
    {
        if (($model = TblCount::findOne(['ip' => $ip, 'date' => $date])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
