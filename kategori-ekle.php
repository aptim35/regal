<?php include "header.php";
      include "islem/baglanti.php";

?>
    <div class="stretch-card" style="width:1040px">
            <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Yeni Kategori Ekleme Sayfası</h4><br>
                        <div class="form-group">
                          <label for="exampleInputName1">Kategori Adı(TR)</label>
                          <input name="kataditr" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Kategori Adı(EN)</label>
                          <input name="katadien" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Kategori Durum</label>
                          <select class="form-control select2" name="durum" style="width:100%">
                              <option value="1" selected="selected">Aktif</option>
                              <option value="0">Pasif</option>
                          </select>
                        </div>
                         <button type="submit" name="kategorikaydet" class="btn btn-primary mr-2">Kaydet</button>
                    </div>
                </form>
            </div>
    </div>
        


<?php include "footer.php";?>