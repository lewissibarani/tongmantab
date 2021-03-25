<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">

   <div class="ct-pageWrapper" id="ct-js-wrapper">
  <section class="company-heading intro-type" id="parallax-one">
    <div class="container">
      <div class="row product-title-info">
        <div class="col-md-12">
         <!--  <h1>TENTANG APLIKASI</h1> -->
        </div>
      </div>
    </div>
    <div class="parallax" id="parallax-cta" style="background-image:url(https://www.solodev.com/assets/hero/hero.jpg);"></div>
  </section>
  <section class="story-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding" id="section">
    <div class="container text-left">
      <h2>Penjelasan Singkat Aplikasi</h2>
      <p>Aplikasi ini bertujuan untuk merekam proses percetakan sampai dengan pengiriman publikasi. tahapan-tahapan dalam penggunaan aplikasi adalah sebagai berikut: </p>
      <div class="col-md-8 col-md-offset-2">
        <div class="red-border"></div>
        
      </div>
    </div>
  </section>
  <section class="culture-section company-sections ct-u-paddingBoth100 paddingBothHalf noTopMobilePadding">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <!-- <h2>Etiam varius porttitor</h2>
          <h3>Vestibulum elementum nisi ut</h3>
          <p class="ct-u-size22 ct-u-fontWeight300 ct-u-marginBottom60">Lorem ipsum dolor sit amet, consectetur adipiscing elit.<br>
          Praesent sed libero vel ex maximus vulputate nec eu ligula. Vestibulum elementum nisi ut fermentum lobortis.</p> -->
        </div>
      </div>
      
    </div>
  </section>

</div>
<div class="panel-body" style="margin-left: 50px;">

  <ul class="timeline">

    <li>
        <i class="fa fa-circle-o bg-red"></i>
        <div class="timeline-item">
            <h3 class="timeline-header"><a href="#">Mulai</a></h3>
        </div>
    </li>
    <li class="time-label">
        <span class="bg-blue">
            Tahap Entri Publikasi
        </span>
    </li>
    <!-- /.timeline-label -->

    <!-- timeline item -->
    <li>
        <!-- timeline icon -->
        <i class="fa fa-book bg-blue"></i>
        <div class="timeline-item">
            <h3 class="timeline-header"><a href="#">Seksi DLS</a> Mendaftrakan Publikasi</h3>

            <div class="timeline-body">
                Seksi DLS mendaftarkan publikasi-publikasi yang akan rilis di menu    <?= Html::a('Publikasi', ['//publikasi/index']) ?>.
            </div>
        </div>
    </li>

    <li>
        <i class="fa fa-book bg-blue"></i>
        <div class="timeline-item">
            <h3 class="timeline-header"><a href="#">Bidang Terkait</a> Melengkapi Link Publikasi</h3>

            <div class="timeline-body">
                Bidang terkait melengkapi link unduh publikasi di menu    <?= Html::a('Publikasi', ['//publikasi/index']) ?> dan menuliskan target alokasi di field catatan.
            </div>
        </div>
    </li>

    <li class="time-label">
        <span class="bg-yellow">
            Tahap Percetakan
        </span>
    </li>

    <li>
        <i class="fa fa-print bg-yellow"></i>
        <div class="timeline-item">
            <h3 class="timeline-header"><a href="#">Bidang Terkait</a> Melengkapi KAK Publikasi</h3>

            <div class="timeline-body">
                Bidang Terkait melengkapi informasi KAK dimenu <?= Html::a('Percetakan', ['//percetakan/index']) ?> menggunakan tombol "Lengkapi".
            </div>
        </div>
    </li>

     <li>
        <i class="fa fa-print bg-yellow"></i>
        <div class="timeline-item">
            <h3 class="timeline-header"><a href="#">PBJ</a> Melengkapi Link Publikasi</h3>

            <div class="timeline-body">
                PBJ melengkapi informasi mengenai proses cetak publikasi di <?= Html::a('Percetakan', ['//percetakan/index']) ?>. Softcopy publikasi dapat dilihat di menu <?= Html::a('Publikasi', ['//publikasi/index']) ?>  
            </div>
        </div>
    </li>

    <li class="time-label">
        <span class="bg-red">
            Tahap Pengiriman
        </span>
    </li>

    <li>
        <i class="fa fa-truck bg-red"></i>
        <div class="timeline-item">
            <h3 class="timeline-header"><a href="#">Subbag Umum</a> Melakukan Proses Pengiriman</h3>

            <div class="timeline-body">
                Subbag Umum melengkapi informasi proses pengiriman dimenu <?= Html::a('Pengiriman', ['//pengiriman/index']) ?> menggunakan tombol "Lengkapi".
            </div>
        </div>
    </li>
     <li>
        <i class="fa fa-check bg-green"></i>
        <div class="timeline-item">
            <h3 class="timeline-header"><a href="#">Selesai</a></h3>
        </div>
    </li>
</ul>
</div>
  
</div>
