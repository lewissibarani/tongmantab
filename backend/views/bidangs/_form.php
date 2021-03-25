<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Bidang */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bidang-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'namabidang')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
