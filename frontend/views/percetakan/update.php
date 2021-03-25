<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Percetakan */

$this->title = 'Lengkapi Percetakan: ' . $model->idpublikasi0->namapublikasi;
$this->params['breadcrumbs'][] = ['label' => 'Percetakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="col-sm-12">

	<div class="panel panel-color panel-default">

	<div class="panel-heading" style="background-color: #006ed0;">
    <h2 style="color:white;"><?= Html::encode($this->title) ?></h2>
 		<small class="form-text text-muted" style="color:white;">
			  Ini adalah halaman untuk update publikasi yang akan dicetak. update publikasi dilakukan oleh PBJ.
			</small>
		</div>
		   
		<div class="panel-body">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
    </div>

</div>
