<?php
use yii\helpers\Html;
?> 

<tr>
      <th style="vertical-align: middle;" scope="row"><?php echo $index +1;?></th>
      <td style="vertical-align: middle;"><?php echo $model->idpublikasi0->namapublikasi ?></td>
      <td align="center" style="vertical-align: middle;">
            <?php 
      if ($model->kaks==null )
      { 
            ?>
            <span title = "Bidang terkait belum mengunggah KAK" class="label label-danger"><i class="fa fa-close"></i></span>
      <?php
      }else
      {
            ?>
            <span title = "Bidang terkait sudah mengunggah KAK" class="label label-success"><i class="fa fa-check"></i></span>
              <?php
      }
      ?>
      </td>
      <td align="center" style="vertical-align: middle;">
            <?php 
      if ($model->tanggalkirimcetak==0)
      { 
            ?>
            <span class="label label-danger">Belum Dikirim ke Percetakan</span>
      <?php
      }else
      {
      ?>
            <?= date_format (date_create($model->tanggalkirimcetak),"d M Y"); ?>
        <?php
      }
      ?>
      </td>
      <td align="center" style="vertical-align: middle;">
            <?php 
      if ($model->tanggalselesaicetak==0)
      { 
            ?>
            <span class="label label-danger">Belum Selesai Dicetak</span>
      <?php
      }else
      {
      ?>
            <?= date_format (date_create($model->tanggalselesaicetak),"d M Y"); ?>
        <?php
      }
      ?>
      </td>
      <td align="center" style="vertical-align: middle;">
            <?php 
            if ($model->tanggalselesaicetak==null || 
               ($model->kaks==null || $model->kaks=='' ) ||
                $model->tanggalkirimcetak==null){
                    ?>
                     <h4><span class="label label-danger">Isian Belum Lengkap</span></h4>
                    <?php
            }else
            {
                    ?>
                     <h4><span class="label label-success">Sudah Masuk ke Pengiriman</span></h4>
                    <?php

            }
            ?>
      </td>
      
      <td style="vertical-align: middle;">
            <?php 
      if ($model->tanggalselesaicetak!==null && $model->kaks!==null && $model->tanggalkirimcetak!==null)
      {
        ?>
            <?php
          if (Yii::$app->user->identity->level == 1 || Yii::$app->user->identity->level == 5){

                    if (Yii::$app->user->identity->level == 1)
                    {
                      ?>
                      <?= Html::a('<i class="fa fa-print"></i>', ['update','id'=>$model->id],            
                      ['class'=>'btn btn-warning',
                       'data-toggle'=>'tooltip',
                       'title'=>'Mutakhirkan Percetakan']);?>
                      <?php
                    }
                    if (Yii::$app->user->identity->level == 5){
                    ?>
                      <?= Html::a('<i class="fa fa-newspaper-o"></i>',         ['/kak/update','id'=>$model->kaks->id], 
                      ['class'=>'btn btn-warning',
                       'title'=>'Mutakhirkan KAK'
                      ]);?>

                       <?= Html::a('<i class="fa fa-download"></i>', $model->kaks->linkdownload , 
                        ['class' => 'btn btn-success',
                        'data-toggle' => 'tooltip',
                        'title' => 'Download Softfile KAK', 
                        'role' => 'modal-remote',
                        'target' => '_blank']); ?>

                      <?php
                    }
            }
            
           ?>
            
      <?php
      }else
      {
            if(Yii::$app->user->identity->level == 5)
            {
              ?>
                    <?= Html::a('<i class="fa fa-newspaper-o"></i>',         ['/kak/update','id'=>$model->kaks->id], 
                    ['class'=>'btn btn-warning',
                     'title'=>'Mutakhirkan KAK'
                    ]);?>

                    <?= Html::a('<i class="fa fa-download"></i>', $model->kaks->linkdownload , 
                        ['class' => 'btn btn-success',
                        'data-toggle' => 'tooltip',
                        'title' => 'Download Softfile KAK', 
                        'role' => 'modal-remote',
                        'target' => '_blank']); ?>

              <?php
            }

            if ((Yii::$app->user->identity->level == 3 || Yii::$app->user->identity->level == 1) 
                 && $model->kaks!==null ){
                    ?>
            <?= Html::a('<i class="fa fa-print"></i>', ['update','id'=>$model->id], 
            ['class'=>'btn btn-danger',
              'data-toggle' => 'tooltip',
              'title' => 'Lengkapi Percetakan',
            ]);?>

            <?= Html::a('<i class="fa fa-newspaper-o"></i>', $model->kaks->linkdownload , 
                      ['class' => 'btn btn-success',
                      'data-toggle' => 'tooltip',
                      'title' => 'Download Softfile KAK', 
                      'role' => 'modal-remote',
                      'target' => '_blank']); ?>

             <?= Html::a('<i class="fa fa-newspaper-o"></i>',['/kak/update','id'=>$model->kaks->id], 
                    ['class'=>'btn btn-warning',
                     'title'=>'Mutakhirkan KAK'
                    ])?>
            <?php
            }

            if ((Yii::$app->user->identity->level == 5 || Yii::$app->user->identity->level == 1
                ) 
              && $model->kaks==null){
              ?>
            <?=  Html::a('<i class="fa fa-newspaper-o"></i>', ['/kak/create','id'=>$model->id], 
            ['class'=>'btn btn-danger',
             'data-toggle' => 'tooltip',
             'title' => 'Isi KAK', ]);?>
            <?php
            }
      }
      ?>
      </td>


    </tr>

