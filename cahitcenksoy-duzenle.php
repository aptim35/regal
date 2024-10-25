<?php include "header.php";
      include "islem/baglanti.php";
      
$bio=$baglanti->prepare("SELECT * FROM cahitcenksoy where id=:id");
$bio->execute(array(

'id'=>$_GET['id']

  ));
$biocek=$bio->fetch(PDO::FETCH_ASSOC);
?>


            
            <div class="stretch-card" style="width:1040px">
              <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Cahit Cenksoy Bio Düzenleme Sayfası</h4><br>
                      
                      <form class="forms-sample">
                        <div class="form-group">
                          <label>Fotoğraf Yükle</label><br>
                          <input type="file" name="biofoto" class="file-upload" accept="image/png, image/jpeg">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">İsim Soyisim</label>
                          <input value="<?php echo $biocek['isim_soyisim']?>" name="isim" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Unvan(TR)</label>
                          <input value="<?php echo $biocek['unvan_tr']?>" name="unvantr" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Unvan(EN)</label>
                          <input value="<?php echo $biocek['unvan_en']?>" name="unvanen" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Unvan(RU)</label>
                          <input value="<?php echo $biocek['unvan_ru']?>" name="unvanru" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Unvan(AR)</label>
                          <input value="<?php echo $biocek['unvan_ar']?>" name="unvanar" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Unvan(DE)</label>
                          <input value="<?php echo $biocek['unvan_de']?>" name="unvande" type="text" class="form-control">
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="exampleInputName1">Bio(TR)</label>
                          <textarea class="ckeditor" name="biotr"><?php echo $biocek['bio_tr']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Bio(EN)</label>
                          <textarea class="ckeditor" name="bioen"><?php echo $biocek['bio_en']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Bio(RU)</label>
                          <textarea class="ckeditor" name="bioru"><?php echo $biocek['bio_ru']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Bio(AR)</label>
                          <textarea class="ckeditor" name="bioar"><?php echo $biocek['bio_ar']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Bio(DE)</label>
                          <textarea class="ckeditor" name="biode"><?php echo $biocek['bio_de']?></textarea>
                        </div>
                        
                        <input type="hidden" name="bio_id" value="<?php echo $biocek['id']?>" >
                        <button type="submit" name="cahitcenksoyduzenle" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                      
                    </div>
                </form>
                
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">İmza Düzenle</h4><br>
                      
                      <form class="forms-sample">
                        <div class="form-group">
                         <input type="file" name="imzafoto" class="file-upload" accept="image/png, image/jpeg">
                        </div>
                        
                        <input type="hidden" name="bio_id" value="<?php echo $biocek['id']?>" >
                        <button type="submit" name="imzaduzenle" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                      
                    </div>
                </form>
              </div>
            </div>




<?php include "footer.php";?>