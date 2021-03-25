<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Percetakan */

$this->title = 'Percetakan';
$this->params['breadcrumbs'][] = ['label' => 'Percetakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="percetakan-create">

	<div class="panel-heading" style="background-color: #006ed0;">
		     <h1 style="color:white;">Publikasi Siap Cetak</h1>
		     <small class="form-text text-muted" style="color:white;">
			  Ini adalah halaman untuk meng-entry publikasi yang akan dicetak. Entry percetakan dilakukan oleh PBJ.
			</small>
		</div>
		<div class="panel-body">
    <?= $this->render('_form', [
        'model' => $modelpercetakan,
        'modelpublikasi' => $modelpublikasi,
        'modelkak' => $modelkak
    ]) ?>
</div>

</div>
