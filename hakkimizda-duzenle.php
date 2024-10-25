<?php 
include "header.php";
include "islem/baglanti.php";
$hakkimizda=$baglanti->prepare("SELECT * FROM hakkimizda where id=?");
$hakkimizda->execute(array(1));
$hakkimizdacek=$hakkimizda->fetch(PDO::FETCH_ASSOC);
?>
                <form action="islem/islem.php" method="POST">
                  <div class="card" style="width:900px">
                    <div class="card-body">
                      <input type="hidden" name="about_id" value="<?php echo $hakkimizdacek['id'] ?>" >
                      <h4 class="card-title">Hakkımızda Başlık(TR)</h4><br>
                      <input value="<?php echo $hakkimizdacek['hakkimizda_baslik']?>" name="basliktr" type="text" class="form-control" style="width:380px;"><br>
                      <h4 class="card-title">Hakkımızda Başlık(EN)</h4><br>
                      <input value="<?php echo $hakkimizdacek['hakkimizda_basliken']?>" name="basliken" type="text" class="form-control" style="width:380px;"><br>
                      <h4 class="card-title">Hakkımızda Başlık(RU)</h4><br>
                      <input value="<?php echo $hakkimizdacek['hakkimizda_baslikru']?>" name="baslikru" type="text" class="form-control" style="width:380px;"><br>
                      <h4 class="card-title">Hakkımızda Başlık(AR)</h4><br>
                      <input value="<?php echo $hakkimizdacek['hakkimizda_baslikar']?>" name="baslikar" type="text" class="form-control" style="width:380px;"><br>
                      <h4 class="card-title">Hakkımızda Başlık(DE)</h4><br>
                      <input value="<?php echo $hakkimizdacek['hakkimizda_baslikde']?>" name="baslikde" type="text" class="form-control" style="width:380px;"><br>
                      <hr>
                      <h4 class="card-title">Hakkımızda Detay(TR)</h4><br>
                      <textarea class="ckeditor" name="iceriktr"><?php echo $hakkimizdacek['hakkimizda_icerik']?></textarea><br>
                      <h4 class="card-title">Hakkımızda Detay(EN)</h4><br>
                      <textarea class="ckeditor" name="iceriken"><?php echo $hakkimizdacek['hakkimizda_iceriken']?></textarea><br>
                      <h4 class="card-title">Hakkımızda Detay(RU)</h4><br>
                      <textarea class="ckeditor" name="icerikru"><?php echo $hakkimizdacek['hakkimizda_icerikru']?></textarea><br>
                      <h4 class="card-title">Hakkımızda Detay(AR)</h4><br>
                      <textarea class="ckeditor" name="icerikar"><?php echo $hakkimizdacek['hakkimizda_icerikar']?></textarea><br>
                      <h4 class="card-title">Hakkımızda Detay(DE)</h4><br>
                      <textarea class="ckeditor" name="icerikde"><?php echo $hakkimizdacek['hakkimizda_icerikde']?></textarea><br>
                      <br>
                      <button type="submit" name="hakkimizdaduzenle" class="btn btn-info btn-rounded btn-fw">Kaydet</button>
                    </div>
                  </div>
                </form>



<?php include "footer.php";?>