<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use kartik\date\DatePicker;
?>


<div class="publikasi-form">

    <?php $form = ActiveForm::begin([
                            'layout' => 'horizontal',
                            'fieldConfig' =>[
                                                'template' => " 
                                                <div class=\"form-group form-md-line-input\">{label}\n
                                                    {beginWrapper}\n
                                                    {input}<div class=\"form-control-focus\"> 
                                                </div>\n
                                                {hint}\n                                                
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


    <?= $form->field($model, 'namapublikasi')
             ->label('Nama Publikasi')
             ->textInput(['maxlength' => true,'style'=>'width:85%'],array())
              ?>

    <?= 

    $form->field($model, 'arcnon')
         ->label('ARC/NonARC')
         ->radioList([1=>'Arc',2=>'NonARC'],
                array('labelOptions' => 
                    array('style' => '',
                            'class'=>'form-check-input'), 'separator' => ' ',));

    ?>

    <?= $form->field($model, 'linkdownload')
             ->label('Link File')
             ->textInput(['maxlength' => true,'style'=>'width:85%'])
             ->hint('<small>Tuliskan link download file dengan lengkap contoh : <b>"https://s.bps.go.id/contoh"</b></small>'); ?>

    <?php 
        echo $form->field($model, 'tanggalrilis')
                  ->label('Tanggal Rilis')
                  ->widget(DatePicker::classname(), [
                        'options' => ['placeholder' => 'Masukkan Jadwal Rilis','style'=>'width:30%'],
                        'pluginOptions' => [
                            'autoclose'=>true,
                            'format' => 'yyyy/mm/dd'
                            ]
                    ]);
    ?>

    
    <?php 
    if($model->isNewRecord){}
    else {
        echo $form->field($model, 'tanggaluploadportal')
                  ->label('Tanggal Upload Portal')
                  ->widget(DatePicker::classname(), [
                        'options' => ['placeholder' => 'Masukkan Tanggal Upload Portal','style'=>'width:30%'],
                        'pluginOptions' => [
                            'autoclose'=>true,
                            'format' => 'yyyy/mm/dd'
                            ]
                    ]);
    }
        
    ?>

    <?= $form->field($model, 'catatan')
             ->textarea(['rows' => '6',
             'style'=>'width:85%'])
             ->hint('<small>Bisa di kosongkan</small>'); ?>


   
    <div class="row">
        <div class="col-md-2">
        </div>
        <div >
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>
    </div>

     <?= $form->field($model, 'userid')->textInput(['value' => Yii::$app->user->identity->id,'style' => 'visibility: hidden;'])->label('aa',['style'=>'visibility: hidden;']) ?>

    <?php ActiveForm::end(); ?>

</div>
