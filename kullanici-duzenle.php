<?php include "header.php";
      include "islem/baglanti.php";
      
$kullanici=$baglanti->prepare("SELECT * FROM kullanici where id=:id");
$kullanici->execute(array(
    
'id'=>$_GET['id']
    
    ));
$kullanicicek=$kullanici->fetch(PDO::FETCH_ASSOC);
?>

            <div class="stretch-card" style="width:1030px">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Kullanıcı Düzenleme Sayfası</h4><br>
                  
                  <form action="islem/islem.php" method="POST" class="forms-sample">
                    <input value="<?php echo $kullanicicek['id']?>" type="hidden" class="form-control" name="kullanici_id">
                    <div class="form-group">
                      <label for="exampleInputName1">Kullanıcı Adı</label>
                      <input value="<?php echo $kullanicicek['kullanici_adi']?>" type="text" class="form-control" name="kadi">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Şifre(*Şifre değişikliği için yazılı olan şifrenin tamamını silip yeni şifrenizi yazınız.)</label>
                      <input value="<?php echo $kullanicicek['sifre']?>" type="text" class="form-control" name="sifre">
                    </div>
                    
                    <button type="submit" name="kullaniciduzenle" class="btn btn-primary mr-2">Kaydet</button>
                    
                  </form>
                </div>
              </div>
            </div>

<?php include "footer.php";?>