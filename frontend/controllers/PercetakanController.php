<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Percetakan;
use frontend\models\Kak;
use frontend\models\Publikasi;
use frontend\models\PercetakanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ArrayDataProvider;
use frontend\models\Pengiriman;


/**
 * PercetakanController implements the CRUD actions for Percetakan model.
 */
class PercetakanController extends Controller
{
    /**
     * {@inheritdoc}
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
     * Lists all Percetakan models.
     * @return mixed
     */
    public function actionIndex()
    {

        $searchModel = new PercetakanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Percetakan model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Percetakan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        /*$model = new Percetakan();
        $modelkak = new Kak();
        $modelpublikasi = new Publikasi();
        $modelpublikasi = $modelpublikasi->findModel($id);

        if ($model->load(Yii::$app->request->post()) && 
            $modelkak->load(Yii::$app->request->post()) && 
            $modelpublikasi->load(Yii::$app->request->post()) && 
            $model->save() && $modelkak->save() && $modelpublikasi->save()
        ) {
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);*/
    }

    /**
     * Updates an existing Percetakan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
       
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if ($model->tanggalselesaicetak !==null)
            {
               $cekmodelpengiriman = Pengiriman::find()->where(['idpercetakan'=>$model->id])->one();
               if ($cekmodelpengiriman ==null)
               {
               $modelpengiriman= new Pengiriman();
               $modelpengiriman->idpercetakan = $model->id;
               $modelpengiriman->userid = $model->userid;
               $modelpengiriman->save();
               }
            }

            Yii::$app->session->setFlash('success', "Data Berhasil di Update.");
            return $this->redirect(['index']);
        }
        /*Yii::$app->session->setFlash('danger', "Maaf data tidak dapat di save.");*/
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Percetakan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Percetakan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Percetakan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Percetakan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
