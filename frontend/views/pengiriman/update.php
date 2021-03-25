<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pengiriman */

$this->title = 'Update Pengiriman: ' . $model->idpercetakan0->idpublikasi0->namapublikasi;
$this->params['breadcrumbs'][] = ['label' => 'Pengirimen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>

	<div class="panel panel-color panel-default">

		<div class="panel-heading" style="background-color: #006ed0;">
	    	<h2 style="color:white;"><?= Html::encode($this->title) ?></h2>
	 		<small class="form-text text-muted" style="color:white;">
				  Ini adalah halaman untuk update publikasi yang akan dikirim. update pengiriman dilakukan oleh Sub-Bag Umum.
				</small>
		</div>
		   
		<div class="panel-body">
		    <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>
		</div>

</div>
