<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PengirimanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pengiriman';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel panel-color panel-default">
        <div class="panel-heading" >
            <h1>Daftar Pengiriman</h1>
            <small class="form-text text-muted" >
                  Ini adalah halaman pengiriman publikasi. Pengiriman dilakukan oleh Sub-Bag Umum.
                </small>
        </div>
        
        <div class="panel-body">

            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th class="text-center" scope="col">Judul Publikasi</th>
                  <th class="text-center" scope="col">Tanggal Publikasi Masuk</th>
                  <th class="text-center" scope="col">Tanggal Selesai Kirim</th>
                  <th class="text-center" scope="col">Catatan Pengiriman</th>
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