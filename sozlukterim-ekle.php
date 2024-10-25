<?php include "header.php";
      include "islem/baglanti.php";

?>
    <div class="stretch-card" style="width:1040px">
              <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Sözlük Terim Ekleme Sayfası</h4><br>
                      
                      <form class="forms-sample">
                        
                        <div class="form-group">
                          <label for="exampleInputName1">Terim (TR)</label>
                          <input name="terimtr" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Terim (EN)</label>
                          <input name="terimen" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Terim (RU)</label>
                          <input name="terimru" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Terim (AR)</label>
                          <input name="terimar" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Terim (DE)</label>
                          <input name="terimde" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Açıklama (TR)</label>
                          <input name="aciklamatr" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Açıklama (EN)</label>
                          <input name="aciklamaen" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Açıklama (RU)</label>
                          <input name="aciklamaru" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Açıklama (AR)</label>
                          <input name="aciklamaar" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Açıklama (DE)</label>
                          <input name="aciklamade" type="text" class="form-control">
                        </div>
                 
                        <button type="submit" name="sozlukkaydet" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                    </div>
                </form>
              </div>
            </div>
        


<?php include "footer.php";?>