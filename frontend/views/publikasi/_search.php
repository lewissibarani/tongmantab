<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PublikasiSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="publikasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'namapublikasi') ?>

    <?= $form->field($model, 'arcnon') ?>

    <?= $form->field($model, 'linkdownload') ?>

    <?= $form->field($model, 'tanggalrilis') ?>

    <?php // echo $form->field($model, 'tanggaluploadportal') ?>

    <?php // echo $form->field($model, 'time') ?>

    <?php // echo $form->field($model, 'userid') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
