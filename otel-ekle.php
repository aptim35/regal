<?php include "header.php";
      include "islem/baglanti.php";

?>
    <div class="stretch-card" style="width:1040px">
              <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Yeni Otel Ekleme Sayfası</h4><br>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label>Fotoğraf Yükle</label><br>
                          <input type="file" name="otelfoto" class="file-upload" accept="image/png, image/jpeg">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel İsim(TR)</label>
                          <input name="isimtr" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel İsim(EN)</label>
                          <input name="isimen" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel İsim(RU)</label>
                          <input name="isimru" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel İsim(AR)</label>
                          <input name="isimar" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel İsim(DE)</label>
                          <input name="isimde" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel Açıklama(TR)</label>
                          <textarea class="form-control ckeditor" name="aciklamatr"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel Açıklama(EN)</label>
                          <textarea class="form-control ckeditor" name="aciklamaen"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel Açıklama(RU)</label>
                          <textarea class="form-control ckeditor" name="aciklamaru"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel Açıklama(AR)</label>
                          <textarea class="form-control ckeditor" name="aciklamaar"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel Açıklama(DE)</label>
                          <textarea class="form-control ckeditor" name="aciklamade"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel Website Linki</label>
                          <input name="link" type="text" class="form-control">
                        </div>
                       
                        <button type="submit" name="otelkaydet" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                      </div>
                    
                </form>
              </div>
            </div>
        


<?php include "footer.php";?>