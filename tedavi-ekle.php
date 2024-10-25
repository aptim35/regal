<?php include "header.php";
      include "islem/baglanti.php";

?>
    <div class="stretch-card" style="width:1040px">
              <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Yeni Tedavi Seçeneği Ekleme Sayfası</h4><br>
                      
                      <form class="forms-sample">
                        <div class="form-group">
                          <label>İkon Fotoğraf Yükle</label><br>
                          <input type="file" name="iconfoto" class="file-upload" accept="image/png, image/jpeg">
                        </div>
                        <button type="submit" name="iconkaydet" class="btn btn-primary mr-2">Kaydet</button>
                      </form>
                    </div>
                </form>

                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <form class="forms-sample">
                        <div class="form-group">
                          <label>İçerik Fotoğraf Yükle</label><br>
                          <input type="file" name="tedavifoto" class="file-upload" accept="image/png, image/jpeg">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Başlık(TR)</label>
                          <input name="basliktr" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Başlık(EN)</label>
                          <input name="basliken" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Başlık(RU)</label>
                          <input name="baslikru" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Başlık(AR)</label>
                          <input name="baslikar" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Başlık(DE)</label>
                          <input name="baslikde" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Giriş Cümlesi(TR)</label>
                          <textarea class="ckeditor" name="giristr"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Giriş Cümlesi(EN)</label>
                          <textarea class="ckeditor" name="girisen"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Giriş Cümlesi(RU)</label>
                          <textarea class="ckeditor" name="girisru"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Giriş Cümlesi(AR)</label>
                          <textarea class="ckeditor" name="girisar"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Giriş Cümlesi(DE)</label>
                          <textarea class="ckeditor" name="girisde"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Detay(TR)</label>
                          <textarea class="ckeditor" name="detaytr"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Detay(EN)</label>
                          <textarea class="ckeditor" name="detayen"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Detay(RU)</label>
                          <textarea class="ckeditor" name="detayru"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Detay(AR)</label>
                          <textarea class="ckeditor" name="detayar"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tedavi Detay(DE)</label>
                          <textarea class="ckeditor" name="detayde"></textarea>
                        </div>
                       
                        <button type="submit" name="tedavikaydet" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                    </div>
                </form>
              </div>
            </div>
        


<?php include "footer.php";?>