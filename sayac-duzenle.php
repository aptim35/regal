<?php include "header.php";
      include "islem/baglanti.php";
      
$sayac=$baglanti->prepare("SELECT * FROM sayac where id=:id");
$sayac->execute(array(
    
'id'=>$_GET['id']
    
    ));
$sayacgetir=$sayac->fetch(PDO::FETCH_ASSOC);
?>

            <div class="stretch-card" style="width:1030px">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Sayaç Düzenleme Sayfası</h4><br>
                  
                  <form action="islem/islem.php" method="POST" class="forms-sample">
                    <input value="<?php echo $sayacgetir['id']?>" type="hidden" class="form-control" name="sayac_id">
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 1 (TR)</label>
                      <input value="<?php echo $sayacgetir['isim1']?>" type="text" class="form-control" name="isim1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 1 (EN)</label>
                      <input value="<?php echo $sayacgetir['isim1_en']?>" type="text" class="form-control" name="isim1en">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 1 (RU)</label>
                      <input value="<?php echo $sayacgetir['isim1_ru']?>" type="text" class="form-control" name="isim1ru">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 1 (AR)</label>
                      <input value="<?php echo $sayacgetir['isim1_ar']?>" type="text" class="form-control" name="isim1ar">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 1 (DE)</label>
                      <input value="<?php echo $sayacgetir['isim1_de']?>" type="text" class="form-control" name="isim1de">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Değer 1</label>
                      <input value="<?php echo $sayacgetir['deger1']?>" type="text" class="form-control" name="deger1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 2 (TR)</label>
                      <input value="<?php echo $sayacgetir['isim2']?>" type="text" class="form-control" name="isim2">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 2 (EN)</label>
                      <input value="<?php echo $sayacgetir['isim2_en']?>" type="text" class="form-control" name="isim2en">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 2 (RU)</label>
                      <input value="<?php echo $sayacgetir['isim2_ru']?>" type="text" class="form-control" name="isim2ru">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 2 (AR)</label>
                      <input value="<?php echo $sayacgetir['isim2_ar']?>" type="text" class="form-control" name="isim2ar">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 2 (DE)</label>
                      <input value="<?php echo $sayacgetir['isim2_de']?>" type="text" class="form-control" name="isim2de">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Değer 2</label>
                      <input value="<?php echo $sayacgetir['deger2']?>" type="text" class="form-control" name="deger2">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Başarı Oranı 2</label>
                      <input value="<?php echo $sayacgetir['basarioran2']?>" type="text" class="form-control" name="oran2">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 3 (TR)</label>
                      <input value="<?php echo $sayacgetir['isim3']?>" type="text" class="form-control" name="isim3">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 3 (EN)</label>
                      <input value="<?php echo $sayacgetir['isim3_en']?>" type="text" class="form-control" name="isim3en">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 3 (RU)</label>
                      <input value="<?php echo $sayacgetir['isim3_ru']?>" type="text" class="form-control" name="isim3ru">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 3 (AR)</label>
                      <input value="<?php echo $sayacgetir['isim3_ar']?>" type="text" class="form-control" name="isim3ar">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 3 (DE)</label>
                      <input value="<?php echo $sayacgetir['isim3_de']?>" type="text" class="form-control" name="isim3de">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Değer 3</label>
                      <input value="<?php echo $sayacgetir['deger3']?>" type="text" class="form-control" name="deger3">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Başarı Oranı 3</label>
                      <input value="<?php echo $sayacgetir['basarioran3']?>" type="text" class="form-control" name="oran3">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 4 (TR)</label>
                      <input value="<?php echo $sayacgetir['isim4']?>" type="text" class="form-control" name="isim4">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 4 (EN)</label>
                      <input value="<?php echo $sayacgetir['isim4_en']?>" type="text" class="form-control" name="isim4en">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 4 (RU)</label>
                      <input value="<?php echo $sayacgetir['isim4_ru']?>" type="text" class="form-control" name="isim4ru">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 4 (AR)</label>
                      <input value="<?php echo $sayacgetir['isim4_ar']?>" type="text" class="form-control" name="isim4ar">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 4 (DE)</label>
                      <input value="<?php echo $sayacgetir['isim4_de']?>" type="text" class="form-control" name="isim4de">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Değer 4</label>
                      <input value="<?php echo $sayacgetir['deger4']?>" type="text" class="form-control" name="deger4">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Başarı Oranı 4</label>
                      <input value="<?php echo $sayacgetir['basarioran4']?>" type="text" class="form-control" name="oran4">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 5 (TR)</label>
                      <input value="<?php echo $sayacgetir['isim5']?>" type="text" class="form-control" name="isim5">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 5 (EN)</label>
                      <input value="<?php echo $sayacgetir['isim5_en']?>" type="text" class="form-control" name="isim5en">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 5 (RU)</label>
                      <input value="<?php echo $sayacgetir['isim5_ru']?>" type="text" class="form-control" name="isim5ru">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 5 (AR)</label>
                      <input value="<?php echo $sayacgetir['isim5_ar']?>" type="text" class="form-control" name="isim5ar">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">İsim 5 (DE)</label>
                      <input value="<?php echo $sayacgetir['isim5_de']?>" type="text" class="form-control" name="isim5de">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Değer 5</label>
                      <input value="<?php echo $sayacgetir['deger5']?>" type="text" class="form-control" name="deger5">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputName1">Başarı Oranı 5</label>
                      <input value="<?php echo $sayacgetir['basarioran5']?>" type="text" class="form-control" name="oran5">
                    </div>
                    <button type="submit" name="sayacduzenle" class="btn btn-primary mr-2">Kaydet</button>
                    
                  </form>
                </div>
              </div>
            </div>

<?php include "footer.php";?>