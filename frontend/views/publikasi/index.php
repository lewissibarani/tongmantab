<?php

use yii\helpers\Html;
use yii\grid\ActionColumn;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PublikasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Publikasi';
$this->params['breadcrumbs'][] = $this->title;
?>


    <div class="panel panel-color panel-default">

            <div class="panel-heading" >
                <h1 >Daftar Publikasi</h1>
                <small class="form-text text-muted" >
                  Ini adalah halaman publikasi. Halaman ini dikelola oleh Seksi DLS dan Bidang.
                </small>
                
            </div>
            <div class="panel-body">
                <p>
                  <?php
                  if(Yii::$app->user->identity->level==1 || Yii::$app->user->identity->level==2)
                  {
                  ?>
                    <?= Html::a('Entry Publikasi Baru', ['create'], ['class' => 'btn btn-success']) ?>
                  <?php
                  }
                  ?>
                    

                </p>
               <table class="table table-striped">
              <thead >
                <tr style="border-bottom : 1px solid black;">
                  <th style="vertical-align: middle;" scope="col">#</th>
                  <th class="text-center" style="vertical-align: middle;" scope="col">Judul Publikasi</th>
                  <th class="text-center" style="vertical-align: middle;" scope="col">ARC/NonARC</th>
                  <th class="text-center" style="vertical-align: middle;" scope="col">Softfile Publikasi</th>
                  <th class="text-center" style="vertical-align: middle;" scope="col">Tanggal Rilis Publikasi</th>
                  <th class="text-center" style="vertical-align: middle;" scope="col">Tanggal Upload Portal</th>
                  <th class="text-center" style="vertical-align: middle;" scope="col">Status</th>
                  <th class="text-center" style="vertical-align: middle;" scope="col">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?=  
                ListView::widget( [
                    'dataProvider' => $dataProvider,
                    'itemView' => '_item',
                ] ); ?>
            </tbody>
            </table>

            </div>



    </div>