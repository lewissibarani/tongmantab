<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Publikasi */

$this->title = 'Buat Publikasi Siap Cetak';
$this->params['breadcrumbs'][] = ['label' => 'Daftar Publikasi Siap Cetak', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="col-sm-12">

	<div class="panel panel-color panel-default">

		<div class="panel-heading" style="background-color: #006ed0;">
		     <h1 style="color:white;"><?= Html::encode($this->title) ?></h1>
		     <small class="form-text text-muted" style="color:white;">
			  Ini adalah halaman untuk mengentry publikasi ARC dan Non-ARC. Entry publikasi dilakukan oleh seksi DLS.
			</small>
		</div>
		   
		<div class="panel-body">
		    <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>
		</div>
    </div>

</div>
