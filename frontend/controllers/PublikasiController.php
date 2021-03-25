<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\Html;
use common\models\LoginForm;
use frontend\models\Publikasi;
use frontend\models\PublikasiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use frontend\models\Percetakan;
use frontend\models\Kak;

/**
 * PublikasiController implements the CRUD actions for Publikasi model.
 */
class PublikasiController extends Controller
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
     * Lists all Publikasi models.
     * @return mixed
     */
    public function actionIndex()
    {

    
        $searchModel = new PublikasiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Publikasi model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
       /* $model = $this->findModel($id);
        $modelpercetakan = new Percetakan();
        $modelKAK = new Kak();

        return $this->render('//percetakan/create', [
            'modelpublikasi' => $model,
            'modelpercetakan' => $modelpercetakan,
            'modelkak' => $modelKAK
        ]);*/

        /*$this->render('//foo/error');*/
    }

    /**
     * Creates a new Publikasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Publikasi();
        
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Publikasi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $cekmodel = Percetakan::find()->where(['idpublikasi' => $model->id])->one();
            if ($cekmodel==null || empty($cekmodel)){
                $modelpercetakan = new Percetakan();
                $modelpercetakan->idpublikasi = $model->id;
                $modelpercetakan->save();
                
            }else {
                $cekmodel->idpublikasi = $model->id;
                $cekmodel->save();
            }
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Publikasi model.
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
     * Finds the Publikasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Publikasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Publikasi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
