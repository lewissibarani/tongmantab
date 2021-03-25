<?php
use yii\helpers\Html;
?> 


<tr>
      <th style="vertical-align: middle;" scope="row"><?php echo $index +1;?></th>
      <td style="vertical-align: middle;"><?php echo $model->idpercetakan0->idpublikasi0->namapublikasi; ?></td>
      <td align="center" style="vertical-align: middle;">
      <?php 
      if ($model->tanggalterimacetak==null)
      { 
            ?>
            <span class="label label-danger">Belum terima dari percetakan</span>
      <?php
      }else
      {
            ?>
            <?= date_format(date_create($model->tanggalterimacetak),"d M Y"); ?>
      <?php      
      }
      ?>
      </td>
      <td align="center" style="vertical-align: middle;">
            <?php 
      if ($model->tanggalselesaikirim==null)
      { 
            ?>
            <span class="label label-danger">Publikasi ini belum selesai dikirim</span>
      <?php
      }else
      {
      ?>
            <?= date_format (date_create($model->tanggalselesaikirim),"d M Y"); ?>
        <?php
      }
      ?>
      </td>
      <td align="center" style="vertical-align: middle;">
            <?php echo $model->idpercetakan0->idpublikasi0->catatan ?>
      </td>
      <td align="center" style="vertical-align: middle;">
            <?php 
                  if ($model->tanggalterimacetak!==null && $model->tanggalselesaikirim!==null)
                  {
                        ?>
                       <h4><span class="label label-success">Isian Lengkap</span></h4>
            <?php }else
            {
                  ?>
                       <h4><span class="label label-danger">Isian Belum Lengkap</span></h4>
            <?php } ?>
      </td>
      
      <td style="vertical-align: middle;">
            <?php 
      if (($model->tanggalterimacetak==null || $model->tanggalselesaikirim==null) && 
          (Yii::$app->user->identity->level == 4 || 
          Yii::$app->user->identity->level == 1))
      { 

            ?>
            <?= Html::a('<i class="fa fa-truck"></i>', ['update','id'=>$model->id], 
            ['class'=>'btn btn-danger',
             'data-toggle'=>'tooltip',
             'title'=>'Lengkapi Isian']) ?>

      <?php
          ?>
          <?= Html::a('<i class="fa fa-download"></i>', $model->idpercetakan0->kaks->linkdownload, 
                      ['class' => 'btn btn-success',
                      'data-toggle' => 'tooltip',
                      'title' => 'Download Softfile KAK', 
                      'role' => 'modal-remote',
                      'target' => '_blank']); ?>
       <?php
        
      }else
      {
      ?>    
            <span class="label label-success">Sudah Selesai Dikirim</span>
        <?php
      }
      ?>
      </td>


    </tr>

