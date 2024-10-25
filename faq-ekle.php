<?php include "header.php";
      include "islem/baglanti.php";

?>
    <div class="stretch-card" style="width:1040px">
              <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Soru Ekleme Sayfası</h4><br>
                      
                      <form class="forms-sample">
                        
                        <div class="form-group">
                          <label for="exampleInputName1">Soru (TR)</label>
                          <input name="sorutr" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Cevap (TR)</label>
                          <textarea class="form-control ckeditor" name="cevaptr" id="cevaptr"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Soru (EN)</label>
                          <input name="soruen" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Cevap (EN)</label>
                          <textarea class="form-control ckeditor" name="cevapen" id="cevapen"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Soru (RU)</label>
                          <input name="soruru" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Cevap (RU)</label>
                          <textarea class="form-control ckeditor" name="cevapru" id="cevapru"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Soru (AR)</label>
                          <input name="soruar" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Cevap (AR)</label>
                          <textarea class="form-control ckeditor" name="cevapar" id="cevapar"></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Soru (DE)</label>
                          <input name="sorude" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Cevap (DE)</label>
                          <textarea class="form-control ckeditor" name="cevapde" id="cevapde"></textarea>
                        </div>
                 
                        <button type="submit" name="sorukaydet" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                    </div>
                </form>
              </div>
            </div>
        


<?php include "footer.php";?>