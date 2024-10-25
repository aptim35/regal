<?php include "header.php";
      include "islem/baglanti.php";

?>
    <div class="stretch-card" style="width:1040px">
              <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Yeni Takım Arkadaşı Ekleme Sayfası</h4><br>
                      
                      <form class="forms-sample">
                        <div class="form-group">
                          <label>Fotoğraf Yükle</label><br>
                          <input type="file" name="kisifoto" class="file-upload" accept="image/png, image/jpeg">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">İsim Soyisim</label>
                          <input name="isim" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Unvan(TR)</label>
                          <input name="unvantr" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Unvan(EN)</label>
                          <input name="unvanen" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Unvan(RU)</label>
                          <input name="unvanru" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Unvan(AR)</label>
                          <input name="unvanar" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Unvan(DE)</label>
                          <input name="unvande" type="text" class="form-control">
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="exampleInputName1">Bio(TR)</label>
                          <textarea class="ckeditor" name="biotr"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Bio(EN)</label>
                         <textarea class="ckeditor" name="bioen"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Bio(RU)</label>
                         <textarea class="ckeditor" name="bioru"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Bio(AR)</label>
                         <textarea class="ckeditor" name="bioar"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Bio(DE)</label>
                         <textarea class="ckeditor" name="biode"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Twitter</label>
                          <input name="twitter" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Instagram</label>
                          <input name="instagram" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Facebook</label>
                          <input name="facebook" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Linkedin</label>
                          <input name="linkedin" type="text" class="form-control">
                        </div>
                        <button type="submit" name="takimkaydet" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                    </div>
                </form>
                
              </div>
            </div>
        


<?php include "footer.php";?>