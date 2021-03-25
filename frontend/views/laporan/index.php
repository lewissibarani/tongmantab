<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PercetakanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Laporan';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel panel-color panel-default">
 
        <div class="panel-heading">
            <h1>Daftar Laporan Percetakan</h1>
                <small class="form-text text-muted">
                  Ini adalah halaman laporan percetakan. Pengiriman dilakukan oleh Sub-Bag Umum.
                </small>
        </div>
        <div class="panel-body">
      
              <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Judul Publikasi</th>
                  <th scope="col">Status di DLS</th>
                  <th scope="col">Status di Bidang</th>
                  <th scope="col">Status di PBJ </th>
                  <th scope="col">Status di Bagian Umum </th>
                  <th scope="col">Status </th>
                </tr>
              </thead>

               <?=  
                ListView::widget( [
                    'dataProvider' => $dataProvider,
                    'itemView' => '_item',
                ] ); ?>
                
            </table>
            
        </div>
</div>
