<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Publikasi */

$this->title = $model->namapublikasi;
$this->params['breadcrumbs'][] = ['label' => 'Publikasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="panel panel-color panel-default">

        <div class="panel-heading" style="background-color: #006ed0;">
            <h1 style="color:white;"><?= Html::encode($this->title) ?></h1>
        </div>
        
        <div class="panel-body">

		    <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>

		</div>

</div>
