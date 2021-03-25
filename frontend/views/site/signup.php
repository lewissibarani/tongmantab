<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Dropdown;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>

        <div class="panel-heading" style="background-color: #006ed0;">
             <h1 style="color:white;">Daftar Pengguna</h1>
             <small class="form-text text-muted" style="color:white;">
              Ini adalah halaman untuk mendaftarkan pengguna.
            </small>
        </div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-10">
                    <?php $form = ActiveForm::begin([
                                    'layout' => 'horizontal',
                                    'fieldConfig' => [
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

                        <?= $form->field($model, 'namapegawaiid')
                                 ->dropDownList(
                                    $itemsNamaPegawai,
                                    ['prompt'=>'Pilih Pegawai...'])
                                 ->label('Nama Pegawai') ?>


                        <?= $form->field($model, 'email') ?>

                        <?= $form->field($model, 'levelid')
                               ->dropDownList(
                                    $itemsNamaLevel,
                                    ['prompt'=>'Pilih Level Pengguna...'])
                        ->label('Level Pengguna') ?>

                        <?= $form->field($model, 'bidangid')
                        ->dropDownList(
                                    $itemsNamaBidang,
                                    ['prompt'=>'Pilih Bidang Pengguna...'])
                        ->label('Bidang/Bagian Pengguna') ?>

                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'password')->passwordInput() ?>

                        

                       <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div >
                            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                        </div>
                    </div>

                    <?php ActiveForm::end(); ?>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
        </div>
