<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kak */

$this->title = 'Create Kak';
$this->params['breadcrumbs'][] = ['label' => 'Kaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

	<div class="panel-heading" style="background-color: #006ed0;">
		     <h1 style="color:white;">Menambahkan Link Unduh KAK</h1>
		     <small class="form-text text-muted" style="color:white;">
			  Ini adalah halaman untuk menambahkan link unduh KAK. Entry KAK ini dilakukan oleh Bidang.
			</small>
	</div>
		<div class="panel-body">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
