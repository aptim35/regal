<?php include "header.php";
      include "islem/baglanti.php";
      
$logo=$baglanti->prepare("SELECT * FROM sitebilgileri");
$logo->execute();
$logocek=$logo->fetch(PDO::FETCH_ASSOC);

?>

            <div class="stretch-card" style="width:1040px">
              <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Menü Logo Düzenle</h4><br>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label>Menü Logo:</label><br>
                          <img style="width:200px" src="images/logo/<?=$logocek['logo'];?>">
                        </div>
                        <div class="form-group">
                          <label>Fotoğraf Yükle</label><br>
                          <input type="file" name="logo" class="file-upload">
                        </div>
                        <input type="hidden" name="logo_id">
                        <button type="submit" name="logoduzenle" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                    </div>
                </form><br>
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Favicon Düzenle</h4><br>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label>Favicon:</label><br>
                          <img style="width:40px" src="images/logo/<?=$logocek['favicon'];?>">
                        </div>
                        <div class="form-group">
                          <label>Fotoğraf Yükle</label><br>
                          <input type="file" name="favicon" class="file-upload">
                        </div>
                        <input type="hidden" name="favicon_id">
                        <button type="submit" name="faviconduzenle" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                    </div>
                </form><br>
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Footer Logo Düzenle</h4><br>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label>Footer Logo:</label><br>
                          <img style="width:200px" src="images/logo/<?=$logocek['footer_logo'];?>">
                        </div>
                        <div class="form-group">
                          <label>Fotoğraf Yükle</label><br>
                          <input type="file" name="footerlogo" class="file-upload">
                        </div>
                        <input type="hidden" name="footerlogo_id">
                        <button type="submit" name="footerlogoduzenle" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                    </div>
                </form>
              </div>
            </div>




<?php include "footer.php";?>