<?php include "header.php";
      include "islem/baglanti.php";

?>
    <div class="stretch-card" style="width:1040px">
              <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Yeni Blog Ekleme Sayfası</h4><br>
                      
                      <form class="forms-sample">
                        <div class="form-group">
                          <label>Fotoğraf Yükle</label><br>
                          <input type="file" name="blogfoto" class="file-upload">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Blog Başlık(TR)</label>
                          <input name="basliktr" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Blog Başlık(EN)</label>
                          <input name="basliken" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Blog Başlık(RU)</label>
                          <input name="baslikru" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Blog Başlık(AR)</label>
                          <input name="baslikar" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Blog Başlık(DE)</label>
                          <input name="baslikde" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Blog Detay(TR)</label>
                          <textarea class="form-control ckeditor" name="detaytr" id="detaytr"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Blog Detay(EN)</label>
                          <textarea class="form-control ckeditor" name="detayen" id="detayen"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Blog Detay(RU)</label>
                          <textarea class="form-control ckeditor" name="detayru" id="detayru"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Blog Detay(AR)</label>
                          <textarea class="form-control ckeditor" name="detayar" id="detayar"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Blog Detay(DE)</label>
                          <textarea class="form-control ckeditor" name="detayde" id="detayde"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Yazar</label>
                          <input name="yazar" type="text" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="exampleInputName1">Eklendiği Gün</label>
                                  <input name="gun" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                               <div class="form-group">
                                  <label for="exampleInputName1">Eklendiği Ay (TR)</label>
                                  <input name="ay" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                               <div class="form-group">
                                  <label for="exampleInputName1">Eklendiği Ay (EN)</label>
                                  <input name="ay_en" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                               <div class="form-group">
                                  <label for="exampleInputName1">Eklendiği Ay (RU)</label>
                                  <input name="ay_ru" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                               <div class="form-group">
                                  <label for="exampleInputName1">Eklendiği Ay (AR)</label>
                                  <input name="ay_ar" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                               <div class="form-group">
                                  <label for="exampleInputName1">Eklendiği Ay (DE)</label>
                                  <input name="ay_de" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="exampleInputName1">Eklendiği Yıl</label>
                                  <input name="yil" type="text" class="form-control">
                                 </div>
                            </div>
                        </div>
  
                        <button type="submit" name="blogkaydet" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                    </div>
                </form>
              </div>
            </div>
        


<?php include "footer.php";?>