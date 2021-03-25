<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\SearchBidang */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Daftar Bidang yang ada di BPS Provinsi Sulawesi Utara';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bidang-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Bidang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'namabidang',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
