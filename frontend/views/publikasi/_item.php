<?php
use yii\helpers\Html;
?> 

<tr>
      <th style="vertical-align: middle;" scope="row"><?php echo $index +1;?></th>
      <td style="vertical-align: middle;" > <?php echo $model->namapublikasi ?></td>
      <td align ="center" style="vertical-align: middle;">
            <?php 
      if ($model->arcnon==1)
      { 
            ?>
            <span class="label label-success">ARC</span>
      <?php
      }else
      {
      ?>
            <span class="label label-warning">NON ARC</span>
        <?php
      }
      ?>
      </td>
      <td align ="center" style="vertical-align: middle;">
            <?php
            if ($model->linkdownload==null)
            {
              ?>
              <span title = "Bidang terkait belum mengunggah soft file" class="label label-danger"><i class="fa fa-close"></i></span>
              <?php
            } 
            else
            {
              ?>
               <span title = "Bidang terkait sudah mengunggah soft file" class="label label-success"><i class="fa fa-check"></i></span>
            <?php
          }

      ?>
      </td>
      <td align ="center" style="vertical-align: middle;">
            <?php 
      if ($model->tanggalrilis==0)
      { 
            ?>
            <span class="label label-danger">Belum Ada Tanggal Rilis</span>
      <?php
      }else
      {
      ?>
           <?= date_format(date_create($model->tanggalrilis),"d M Y");?>
        <?php
      }
      ?>
      </td>
      <td align ="center" style="vertical-align: middle;">
            <?php 
      if ($model->tanggaluploadportal==0)
      { 
            ?>
            <span class="label label-danger">Belum Upload Portal</span>
      <?php
      }else
      {
        ?>
       <?= date_format(date_create($model->tanggaluploadportal),"d M Y");?>
      <?php
      }
      ?>
      </td>
      <td align ="center" style="vertical-align: middle;">
        <?php if ($model->linkdownload==null || $model->tanggalrilis==0 || $model->tanggaluploadportal==0)
        {
          echo( ' <h4><span class="label label-danger">Isian Belum Lengkap</span></h4>');
        }else
        {
          echo( '<h4><span class="label label-success">Sudah Masuk ke PBJ</span> </h4>');
        }
            ?>
      </td>
      
      <td style="vertical-align: middle;">
             <?php

      if(Yii::$app->user->identity->level!==4)
      {
          if( $model->tanggalrilis==0 || $model->tanggaluploadportal==0)
        { 
              if(Yii::$app->user->identity->level!==3)
              {
              ?>
              <div class="btn-group">
                        <?= 
                         Html::a('<i class="fa fa-pencil"></i> ', 
                          ['/publikasi/update','id'=>$model->id], 
                          ['class'=>'btn btn-danger',
                            'data-toggle' => 'tooltip',
                            'title' => 'Mutakhirkan'],
                          ) 
                      ?>
              </div>

               <?php 
              } 
              if ($model->linkdownload==null || $model->linkdownload=='')
              {
              }
              else{
                ?>
                  <?= Html::a('<i class="fa fa-download"></i>', $model->linkdownload , 
                        ['class' => 'btn btn-success',
                        'data-toggle' => 'tooltip',
                        'title' => 'Download Softfile Publikasi', 
                        'role' => 'modal-remote',
                        'target' => '_blank']); ?>
                  <?php
              }
              ?>
        <?php
        }else
        {
              if(Yii::$app->user->identity->level!==3)
              {
        ?>
              
                        <?= 
                         Html::a('<i class="fa fa-pencil"></i> ', 
                          ['/publikasi/update','id'=>$model->id], 
                          ['class'=>'btn btn-warning',
                            'data-toggle' => 'tooltip',
                            'title' => 'Mutakhirkan'],
                          ) 
                      ?> 
              <?php
              } 
              if ($model->linkdownload==null || $model->linkdownload=='')
              {
              }
              else{
                ?>
                  <?= Html::a('<i class="fa fa-download"></i>', $model->linkdownload , 
                        ['class' => 'btn btn-success',
                        'data-toggle' => 'tooltip',
                        'title' => 'Download Softfile Publikasi', 
                        'role' => 'modal-remote',
                        'target' => '_blank']); ?>
                  <?php
              }
            ?>
            <?php
      }
      ?>




<?php
      } 
      ?>
      </td>


    </tr>
