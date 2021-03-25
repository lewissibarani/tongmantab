<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kak */

$this->title = 'Update Kak: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kaks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
	<div class="panel-heading" style="background-color: #006ed0;">
		     <h1 style="color:white;">Update KAK</h1>
		     <small class="form-text text-muted" style="color:white;">
			  Ini adalah halaman untuk memutakhirkan link unduh KAK. Entry pemutakhiran KAK ini dilakukan oleh Bidang.
			</small>
	</div>
		<div class="panel-body">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
