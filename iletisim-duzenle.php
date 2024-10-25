<?php include "header.php";
      include "islem/baglanti.php";
      
$iletisim=$baglanti->prepare("SELECT * FROM sitebilgileri where id=:id");
$iletisim->execute(array(
    
'id'=>$_GET['id']
    
    ));
$iletisimcek=$iletisim->fetch(PDO::FETCH_ASSOC);
?>

            <div class="stretch-card" style="width:1030px">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">İletişim Düzenleme Sayfası</h4><br>
                  
                  <form action="islem/islem.php" method="POST" class="forms-sample">
                    <input value="<?php echo $iletisimcek['id']?>" type="hidden" class="form-control" name="iletisim_id">
                    <div class="form-group">
                      <label for="exampleInputName1">Adres(TR)</label>
                      <input value="<?php echo $iletisimcek['adres']?>" type="text" class="form-control" name="adres">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Adres(EN)</label>
                      <input value="<?php echo $iletisimcek['adresen']?>" type="text" class="form-control" name="adresen">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Adres(RU)</label>
                      <input value="<?php echo $iletisimcek['adresru']?>" type="text" class="form-control" name="adresru">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Adres(AR)</label>
                      <input value="<?php echo $iletisimcek['adresar']?>" type="text" class="form-control" name="adresar">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Adres(DE)</label>
                      <input value="<?php echo $iletisimcek['adresde']?>" type="text" class="form-control" name="adresde">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Telefon</label>
                      <input value="<?php echo $iletisimcek['telefon1']?>" type="text" class="form-control" name="telefon">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">2. Telefon</label>
                      <input value="<?php echo $iletisimcek['telefon2']?>" type="text" class="form-control" name="telefon2">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">3. Telefon</label>
                      <input value="<?php echo $iletisimcek['telefon3']?>" type="text" class="form-control" name="telefon3">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">4. Telefon</label>
                      <input value="<?php echo $iletisimcek['telefon4']?>" type="text" class="form-control" name="telefon4">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">E-posta</label>
                      <input value="<?php echo $iletisimcek['mail']?>" type="text" class="form-control" name="mail">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">2. E-posta</label>
                      <input value="<?php echo $iletisimcek['mail2']?>" type="text" class="form-control" name="mail2">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Facebook</label>
                      <input value="<?php echo $iletisimcek['facebook']?>" type="text" class="form-control" name="facebook">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Instagram</label>
                      <input value="<?php echo $iletisimcek['instagram']?>" type="text" class="form-control" name="instagram">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Twitter</label>
                      <input value="<?php echo $iletisimcek['twitter']?>" type="text" class="form-control" name="twitter">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Linkedin</label>
                      <input value="<?php echo $iletisimcek['linkedin']?>" type="text" class="form-control" name="linkedin">
                    </div>
                    <button type="submit" name="iletisimduzenle" class="btn btn-primary mr-2">Kaydet</button>
                    
                  </form>
                </div>
              </div>
            </div>

<?php include "footer.php";?>