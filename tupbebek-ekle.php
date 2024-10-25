<?php include "header.php";
      include "islem/baglanti.php";

?>
    <div class="stretch-card" style="width:1040px">
              <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Tüp Bebek Yazı Ekleme Sayfası</h4><br>
                      
                      <form class="forms-sample">
                        
                        <div class="form-group">
                          <label for="exampleInputName1">Tüp Bebek Başlık(TR)</label>
                          <input name="basliktr" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tüp Bebek Başlık(EN)</label>
                          <input name="basliken" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tüp Bebek Başlık(RU)</label>
                          <input name="baslikru" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tüp Bebek Başlık(AR)</label>
                          <input name="baslikar" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tüp Bebek Başlık(DE)</label>
                          <input name="baslikde" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tüp Bebek Detay(TR)</label>
                          <textarea class="form-control ckeditor" name="detaytr" id="detaytr"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tüp Bebek Detay(EN)</label>
                          <textarea class="form-control ckeditor" name="detayen" id="detayen"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tüp Bebek Detay(RU)</label>
                          <textarea class="form-control ckeditor" name="detayru" id="detayru"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tüp Bebek Detay(AR)</label>
                          <textarea class="form-control ckeditor" name="detayar" id="detayar"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tüp Bebek Detay(DE)</label>
                          <textarea class="form-control ckeditor" name="detayde" id="detayde"></textarea>
                        </div>
                 
                        <button type="submit" name="tupbebekkaydet" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                    </div>
                </form>
              </div>
            </div>
        


<?php include "footer.php";?>