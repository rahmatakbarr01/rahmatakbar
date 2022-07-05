<?php

namespace app\controllers;

use app\models\Detaipembelian;
use app\models\Detaipembeliansearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetaipembelianController implements the CRUD actions for Detaipembelian model.
 */
class DetaipembelianController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Detaipembelian models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new Detaipembeliansearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Detaipembelian model.
     * @param int $no_faktur No Faktur
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($no_faktur)
    {
        return $this->render('view', [
            'model' => $this->findModel($no_faktur),
        ]);
    }

    /**
     * Creates a new Detaipembelian model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Detaipembelian();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'no_faktur' => $model->no_faktur]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Detaipembelian model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $no_faktur No Faktur
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($no_faktur)
    {
        $model = $this->findModel($no_faktur);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'no_faktur' => $model->no_faktur]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Detaipembelian model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $no_faktur No Faktur
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($no_faktur)
    {
        $this->findModel($no_faktur)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Detaipembelian model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $no_faktur No Faktur
     * @return Detaipembelian the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($no_faktur)
    {
        if (($model = Detaipembelian::findOne(['no_faktur' => $no_faktur])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
