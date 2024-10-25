<?php include "header.php";
      include "islem/baglanti.php";

?>
    <div class="stretch-card" style="width:1040px">
              <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Sizden Gelenler Ekleme Sayfası</h4><br>
                      
                      <form class="forms-sample">
                        
                        <div class="form-group">
                          <label for="exampleInputName1">İsim</label>
                          <input name="ad" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Açıklama (TR)</label>
                          <textarea class="form-control ckeditor" name="detaytr" id="detaytr"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Açıklama (EN)</label>
                          <textarea class="form-control ckeditor" name="detayen" id="detayen"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Açıklama (RU)</label>
                          <textarea class="form-control ckeditor" name="detayru" id="detayru"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Açıklama (AR)</label>
                          <textarea class="form-control ckeditor" name="detayar" id="detayar"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Açıklama (DE)</label>
                          <textarea class="form-control ckeditor" name="detayde" id="detayde"></textarea>
                        </div>
                 
                        <button type="submit" name="sizdengelenkaydet" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                    </div>
                </form>
              </div>
            </div>
        


<?php include "footer.php";?>