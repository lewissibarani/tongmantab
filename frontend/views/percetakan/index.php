<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PercetakanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Percetakan';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-color panel-default">

        <div class="panel-heading" >
            <h1>Daftar Percetakan</h1>
            <small class="form-text text-muted">
                  Ini adalah halaman percetakan publikasi. Percetakan dilakukan oleh PBJ.
                </small>
        </div>
        
        <div class="panel-body">

            <table class="table table-borderless table-dark">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th class="text-center" scope="col">Judul Publikasi</th>
                  <th class="text-center" scope="col">Status KAK</th>
                  <th class="text-center" scope="col">Tanggal Kirim Percetakan</th>
                  <th class="text-center" scope="col">Tanggal Selesai Cetak</th>
                  <th class="text-center" scope="col">Status</th>
                  <th class="text-center" scope="col">Aksi</th>
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
