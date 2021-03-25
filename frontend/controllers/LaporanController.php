<?php

namespace frontend\controllers;

use Yii;
use yii\helpers\Html;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\LoginForm;
use frontend\models\Publikasi;
use frontend\models\PublikasiSearch;
use frontend\models\Kak;
use frontend\models\Percetakan;
use frontend\models\Pengiriman;
/**
 * PublikasiController implements the CRUD actions for Publikasi model.
 */
class LaporanController extends Controller
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
            'access' => [
            'class' => \yii\filters\AccessControl::className(),
            'only' => ['create', 'update'],
            'rules' => [
                // deny all POST requests
	                [
	                    'allow' => false,
	                    'verbs' => ['POST']
	                ],
	                // allow authenticated users
	                [
	                    'allow' => true,
	                    'roles' => ['@'],
	                ],
	                // everything else is denied
            	],
        	],
        ];
    }

    public function actionIndex()
    {
        $searchModel = new PublikasiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Publikasi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

     protected function findPercetakan($id)
    {
        if (($model = Publikasi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
