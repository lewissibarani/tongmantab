<?php

/* @var $this yii\web\View */
use dosamigos\chartjs\ChartJs;

$this->title = 'Tong Mantab';
?>
<div class="site-index">

<!-- <div class="jumbotron">
      <h1>Selamay</h1>
  
      <p class="lead">You have successfully created your Yii-powered application.</p>
  </div> 
 -->
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <div class="info-box">
                  <!-- Apply any bg-* class to to the icon to color it -->
                  <span class="info-box-icon bg-blue"><i class="fa fa-book"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Total Entry Publikasi</span>
                    <span class="info-box-number"><?= $jumlahPublikasi ?></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-lg-4">
                 <!-- Apply any bg-* class to to the info-box to color it -->
                <div class="info-box">
                  <!-- Apply any bg-* class to to the icon to color it -->
                  <span class="info-box-icon bg-purple"><i class="fa fa-print"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Publikasi Selesai Cetak</span>
                    <span class="info-box-number"><?= $jumlahPercetakan ?></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <div class="col-lg-4">
                <div class="info-box">
                  <!-- Apply any bg-* class to to the icon to color it -->
                  <span class="info-box-icon bg-yellow"><i class="fa fa-truck"></i></span>
                  <div class="info-box-content">
                    <span class="info-box-text">Publikasi Selesai Kirim</span>
                    <span class="info-box-number"><?= $jumlahPengiriman ?></span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
        </div>

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Rekap Cepat Bulanan dan Tahunan</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                </div>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Laporan Bulanan Percetakan, Tahun <?= date("Y")?></strong>
                  </p>

                  <div class="chart">
                    <!-- Sales Chart Canvas -->
                    <?= ChartJs::widget([
                  'type' => 'line',
                  'options' => [
                      'height' => 150,
                      'width' => 400
                  ],
                  'data' => [
                      'labels' => ["January", "February", "March", "April", "May", "June", "July",
                                  "August","September","October","November","December"
                                    ],
                      'datasets' => [
                          [
                              'label' => 'Selesai Dicetak',
                              'backgroundColor' => "rgba(179,181,198,0.2)",
                              'borderColor' => "rgba(179,181,198,1)",
                              'pointBackgroundColor' => "rgba(179,181,198,1)",
                              'pointBorderColor' => "#fff",
                              'pointHoverBackgroundColor' => "#fff",
                              'pointHoverBorderColor' => "rgba(179,181,198,1)",
                              'data' =>  [
                                         $dataProvider[0]['January'],
                                         $dataProvider[0]['February'],
                                         $dataProvider[0]['March'],
                                         $dataProvider[0]['April'],
                                         $dataProvider[0]['May'],
                                         $dataProvider[0]['June'],
                                         $dataProvider[0]['July'],
                                         $dataProvider[0]['August'],
                                         $dataProvider[0]['September'],
                                         $dataProvider[0]['October'],
                                         $dataProvider[0]['November'],
                                         $dataProvider[0]['December'],
                                       ]
                          ],
                          [
                              'label' => 'Selesai Dikirim',
                              'backgroundColor' => "rgba(255,99,132,0.2)",
                              'borderColor' => "rgba(255,99,132,1)",
                              'pointBackgroundColor' => "rgba(255,99,132,1)",
                              'pointBorderColor' => "#fff",
                              'pointHoverBackgroundColor' => "#fff",
                              'pointHoverBorderColor' => "rgba(255,99,132,1)",
                              'data' =>  [
                                         $dataProviderPengiriman[0]['January'],
                                         $dataProviderPengiriman[0]['February'],
                                         $dataProviderPengiriman[0]['March'],
                                         $dataProviderPengiriman[0]['April'],
                                         $dataProviderPengiriman[0]['May'],
                                         $dataProviderPengiriman[0]['June'],
                                         $dataProviderPengiriman[0]['July'],
                                         $dataProviderPengiriman[0]['August'],
                                         $dataProviderPengiriman[0]['September'],
                                         $dataProviderPengiriman[0]['October'],
                                         $dataProviderPengiriman[0]['November'],
                                         $dataProviderPengiriman[0]['December'],
                                       ]
                          ]
                      ]
                  ]
              ]);
              ?>
                  </div>
                  <!-- /.chart-responsive -->
                </div>
                <!-- /.col -->
                <div class="col-md-4">
                  <p class="text-center">
                    <strong>Laporan Progress</strong>
                  </p>
                  <div class="progress-group">
                    <span class="progress-text">Publikasi terunggah ke portalpublikasi</span>
                    <span class="progress-number"><b><?= $progressPublikasi ?></b>/<?= $jumlahPublikasi ?></span>

                    <?php  if ($jumlahPublikasi !== 0 )
                    {
                      $publikasipercetage = ( $progressPublikasi / $jumlahPublikasi ) * 100;
                    }
                    else{
                      $publikasipercetage = 0;
                    }
                    ?>

                    <div class="progress sm">
                      <?= '<div class="progress-bar progress-bar-aqua" style="width: '.$publikasipercetage.'%"></div>'?>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Publikasi berhasil dicetak</span>
                    <span class="progress-number"><b><?= $progressPercetakan ?></b>/<?= $jumlahPercetakan ?></span>

                    <?php if ($jumlahPercetakan !== 0 )
                    {
                      $percetakanpercetage = ( $progressPercetakan / $jumlahPercetakan ) * 100;
                    }
                    else {
                      $percetakanpercetage = 0;
                    }
                    ?>

                    <div class="progress sm">
                      <?= '<div class="progress-bar progress-bar-aqua" style="width: '.$percetakanpercetage.'%"></div>'?>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="progress-group">
                    <span class="progress-text">Publikasi selesai kirim</span>
                    <span class="progress-number"><b><?= $progressPengiriman ?></b>/<?= $jumlahPengiriman ?></span>
                    <?php if ($jumlahPengiriman !==0)
                    {
                      $pengirimanpercetage = ( $progressPengiriman / $jumlahPengiriman ) * 100;
                    }
                    else
                    {
                      $pengirimanpercetage =0;
                    }
                    ?>
                    <div class="progress sm">
                      <?= '<div class="progress-bar progress-bar-aqua" style="width: '.$pengirimanpercetage.'%"></div>'?>
                    </div>
                  </div>
                  <!-- /.progress-group -->
                  <div class="description-block"><!-- 
                    <span class="description-percentage text-red">
                      <i class="fa fa-caret-down"></i> 18%</span> -->

                      <?php 
                      $IKTP = ( $pengirimanpercetage +  $percetakanpercetage +$publikasipercetage)/3;
                    ?>
                    <div class="box">
                      <div class="box-header with-border">
                        <h1 ><?= number_format($IKTP,2,',', ' ') ?></h1>
                      </div>
                      <span class="description-text">INDEKS KERJASAMA TIM PERCETAKAN</span>
                    </div>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

    </div>
</div>