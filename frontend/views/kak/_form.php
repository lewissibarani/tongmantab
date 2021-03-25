<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Kak */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kak-form">

      <?php $form = ActiveForm::begin([
                            'layout' => 'horizontal',
                            'fieldConfig' => [
                                'template' => " 
                                <div class=\"form-group form-md-line-input\">{label}\n
                                    {beginWrapper}\n
                                    {input}<div class=\"form-control-focus\"> 
                                </div>\n
                                {error}\n
                                </div>
                                {endWrapper}",
                                    'horizontalCssClasses' => [
                                    'label'   => 'col-md-2 control-label',
                                    'offset'  => 'col-sm-offset-4',
                                    'wrapper' => 'col-sm-10',
                                    'error'   => 'has-error',
                                    'hint'    => 'help-block',
                                ],
                            ],
    ]); ?>

    <?= $form->field($model, 'namaKAK')->textInput(['maxlength' => true,'readonly'=> true]) ?>

    <?= $form->field($model, 'linkdownload')->textInput(['maxlength' => true]) ?>

    

        <div class="row">
        <div class="col-md-2">
        </div>
	        <div >
	            <?= Html::submitButton('Save', ['class' => 'btn btn-success col-md-2 ']) ?>
	        </div>
    	</div>

    <?= $form->field($model, 'userid')->hiddenInput(['value' => Yii::$app->user->identity->id ])->label(false)?>

    <?php ActiveForm::end(); ?>

</div>
