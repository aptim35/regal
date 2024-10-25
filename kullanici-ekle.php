<?php include "header.php";
      include "islem/baglanti.php";
      
?>

            <div class="stretch-card" style="width:1030px">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Kullanıcı Ekleme Sayfası</h4><br>
                  
                  <form action="islem/islem.php" method="POST" class="forms-sample">
                   
                    <div class="form-group">
                      <label for="exampleInputName1">Kullanıcı Adı</label>
                      <input type="text" class="form-control" name="kadi">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Şifre</label>
                      <input type="text" class="form-control" name="sifre">
                    </div>
                    
                    <button type="submit" name="kullaniciekle" class="btn btn-primary mr-2">Kaydet</button>
                    
                  </form>
                </div>
              </div>
            </div>

<?php include "footer.php";?>