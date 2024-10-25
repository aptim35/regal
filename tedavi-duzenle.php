<?php include "header.php";
      include "islem/baglanti.php";
      
$tedavi=$baglanti->prepare("SELECT * FROM tedaviler where id=:id");
$tedavi->execute(array(

'id'=>$_GET['id']

  ));
$tedavicek=$tedavi->fetch(PDO::FETCH_ASSOC);
?>


            
            <div class="stretch-card" style="width:1040px">
              <div class="card">
                  <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Tedavi Seçenekleri Düzenleme Sayfası</h4><br>
                      
                      <form class="forms-sample">
                        <div class="form-group">
                          <label>İkon Fotoğraf Yükle</label><br>
                          <img src="images/tedavi/<?=$tedavicek['tedavi_icon'];?>" style="width:70px;height:70px"><br>
                          <input type="file" name="iconfoto" class="file-upload" accept="image/png, image/jpeg">
                        </div>
                        <input type="hidden" name="tedavi_id" value="<?php echo $tedavicek['id']?>" >
                        <button type="submit" name="iconduzenle" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                    </div>
                </form>
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <form class="forms-sample">
                        <div class="form-group">
                          <label>İçerik Fotoğraf Yükle</label><br>
                          <img src="images/tedavi/<?=$tedavicek['tedavi_gorsel'];?>" style="width:100px;height:70px"><br>
                          <input type="file" name="tedavifoto" class="file-upload" accept="image/png, image/jpeg">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Başlık(TR)</label>
                          <input value="<?php echo $tedavicek['tedavi_baslik_tr']?>" name="basliktr" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Başlık(EN)</label>
                          <input value="<?php echo $tedavicek['tedavi_baslik_en']?>" name="basliken" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Başlık(RU)</label>
                          <input value="<?php echo $tedavicek['tedavi_baslik_ru']?>" name="baslikru" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Başlık(AR)</label>
                          <input value="<?php echo $tedavicek['tedavi_baslik_ar']?>" name="baslikar" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Başlık(DE)</label>
                          <input value="<?php echo $tedavicek['tedavi_baslik_de']?>" name="baslikde" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Giriş Cümlesi(TR)</label>
                          <textarea class="ckeditor" name="tedavigiristr"><?php echo $tedavicek['tedavi_giris_tr']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Giriş Cümlesi(EN)</label>
                          <textarea class="ckeditor" name="tedavigirisen"><?php echo $tedavicek['tedavi_giris_en']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Giriş Cümlesi(RU)</label>
                          <textarea class="ckeditor" name="tedavigirisru"><?php echo $tedavicek['tedavi_giris_ru']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Giriş Cümlesi(AR)</label>
                          <textarea class="ckeditor" name="tedavigirisar"><?php echo $tedavicek['tedavi_giris_ar']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Giriş Cümlesi(DE)</label>
                          <textarea class="ckeditor" name="tedavigirisde"><?php echo $tedavicek['tedavi_giris_de']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Detay(TR)</label>
                          <textarea class="ckeditor" name="detaytr"><?php echo $tedavicek['tedavi_detay_tr']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Detay(EN)</label>
                          <textarea class="ckeditor" name="detayen"><?php echo $tedavicek['tedavi_detay_en']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Detay(RU)</label>
                          <textarea class="ckeditor" name="detayru"><?php echo $tedavicek['tedavi_detay_ru']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Detay(AR)</label>
                          <textarea class="ckeditor" name="detayar"><?php echo $tedavicek['tedavi_detay_ar']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Detay(DE)</label>
                          <textarea class="ckeditor" name="detayde"><?php echo $tedavicek['tedavi_detay_de']?></textarea>
                        </div>
                        
                        <input type="hidden" name="tedavi_id" value="<?php echo $tedavicek['id']?>" >
                        <button type="submit" name="tedaviduzenle" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                    </div>
                </form>
              </div>
            </div>




<?php include "footer.php";?>