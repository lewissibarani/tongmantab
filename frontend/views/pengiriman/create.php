<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pengiriman */

$this->title = 'Create Pengiriman';
$this->params['breadcrumbs'][] = ['label' => 'Pengirimen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pengiriman-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
