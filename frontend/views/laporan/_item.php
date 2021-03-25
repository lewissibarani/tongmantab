<!-- test demo -->

<?php
use yii\helpers\Html;
?> 


<tr>
      <th style="vertical-align: middle;" scope="row"><?php echo $index +1;?></th>
      <td style="vertical-align: middle;"><?php echo $model->namapublikasi; ?></td>
      <td style="vertical-align: middle;">
      <?php 
      if ($model->tanggaluploadportal==null)
      { 
            ?>
            <span class="label label-danger">Seksi DLS Belum Upload ke Portal</span>
      <?php
      }else
      {
            ?>
            <span class="label label-success">Sudah Upload ke Portal</span>
      <?php      
      }
      ?>
      </td>
      <td style="vertical-align: middle;">
            <?php 
      try{

                  if ($model->linkdownload!==null && $model->percetakans->kaks->linkdownload!==null
                  )
                  { 
                  ?>    
                        <span class="label label-success">Sudah Dikirim ke PBJ</span>
                  <?php
                  }else
                  {
                        if ($model->linkdownload!==null)
                        {
                        ?>
                              <span class="label label-danger">Belum Cantumkan Link Softfile</span>
                        <?php
                        }else 
                        {
                              if($model->percetakans->kaks->linkdownload==null)
                              {
                              ?>
                                    <span class="label label-danger">Belum Cantumkan Link KAK</span>
                              <?php

                              }
                        }
                  }
      }catch(Exception $e){
                        ?>
                        <span class="label label-danger">KAK Belum Dilampirkan</span>
                        <?php
      } 
      ?>
      </td>
      <td style="vertical-align: middle;">
            <?php 
      try{
            if ($model->percetakans->tanggalkirimcetak!==null && $model->percetakans->tanggalselesaicetak!==null )
            { 
            ?>    
                  <span class="label label-success">Sudah Masuk Subbag Umum</span>
            <?php
            }else
            {
                  if ($model->percetakans->tanggalkirimcetak==null)
                  {
                  ?>
                        <span class="label label-danger">Belum Kirim ke Percetakan</span>
                  <?php
                  }else 
                  {
                        if($model->percetakans->tanggalselesaicetak==null)
                        {
                        ?>
                              <span class="label label-danger">Publikasi Belum Selesai Cetak</span>
                        <?php
                        }
                  }
            }
      }catch(Exception $e){
                        ?>
                        <span class="label label-danger">Publikasi ini belum dicetak</span>
                        <?php
      } 
      ?>
      </td>
      <td style="vertical-align: middle;">
            <?php 

      try{
            if ($model->percetakans->pengirimen->tanggalterimacetak!==null && $model->percetakans->pengirimen->tanggalselesaikirim!==null)
            { 
            ?>    
                  <span class="label label-success">Sudah Masuk Subbag Umum</span>
            <?php
            }else
            {
                  if ($model->percetakans->pengirimen->tanggalterimacetak==null)
                  {
                  ?>
                        <span class="label label-danger">Belum Terima dari Percetakan</span>
                  <?php
                  }else 
                  {
                        if($model->percetakans->pengirimen->tanggalselesaikirim==null)
                        {
                        ?>
                              <span class="label label-danger">Belum Selesai Kirim</span>
                        <?php
                        }
                  }
            }

      }catch(Exception $e){
            ?>

            <span class="label label-danger">Belum Selesai Cetak</span>
            <?php
             
      }
            
     
      ?>
      </td>
      
      <td style="vertical-align: middle;">
            <?php 

      try{
             if($model->percetakans->pengirimen->tanggalselesaikirim==null || $model->percetakans->tanggalselesaicetak==null)
                        {
                        ?>
                              <span class="label label-danger">Belum Selesai</span>
                        <?php
                        }else
                  {

            
            ?>    
                  <span class="label label-success">Sudah Selesai</span>
              <?php
            }
      }catch(Exception $e){
            ?>

            <span class="label label-danger">Belum Selesai</span>
            <?php
             
      }

      ?>
      </td>


    </tr>

