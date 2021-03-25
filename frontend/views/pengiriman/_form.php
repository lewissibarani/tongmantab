<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Pengiriman */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pengiriman-form">

    
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

     <?php 
        echo $form->field($model, 'tanggalterimacetak')
                  ->label('Tanggal Terima Cetak')
                  ->widget(DatePicker::classname(), [
                        'options' => ['placeholder' => 'Masukkan Tanggal Terima Cetak','style'=>'width:30%'],
                        'pluginOptions' => [
                            'autoclose'=>true,
                            'format' => 'yyyy/mm/dd'
                            ]
                    ]);
    ?>

    <?php 
        echo $form->field($model, 'tanggalselesaikirim')
                  ->label('Tanggal Selesai Kirim')
                  ->widget(DatePicker::classname(), [
                        'options' => ['placeholder' => 'Masukkan Tanggal Selesai Kirim','style'=>'width:30%'],
                        'pluginOptions' => [
                            'autoclose'=>true,
                            'format' => 'yyyy/mm/dd'
                            ]
                    ]);
    ?>

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
