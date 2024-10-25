<?php include "header.php";
      include "islem/baglanti.php";
      
$takim=$baglanti->prepare("SELECT * FROM takim where id=:id");
$takim->execute(array(

'id'=>$_GET['id']

  ));
$takimcek=$takim->fetch(PDO::FETCH_ASSOC);
?>

            <div class="stretch-card" style="width:1040px">
              <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Takım Düzenleme Sayfası</h4><br>
                      
                      <form class="forms-sample">
                        <div class="form-group">
                          <label>Fotoğraf Yükle</label><br>
                          <input type="file" name="takimfoto" class="file-upload">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">İsim Soyisim</label>
                          <input value="<?php echo $takimcek['isim_soyisim']?>" name="isim" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Unvan(TR)</label>
                          <input value="<?php echo $takimcek['unvan_tr']?>" name="unvantr" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Unvan(EN)</label>
                          <input value="<?php echo $takimcek['unvan_en']?>" name="unvanen" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Unvan(RU)</label>
                          <input value="<?php echo $takimcek['unvan_ru']?>" name="unvanru" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Unvan(AR)</label>
                          <input value="<?php echo $takimcek['unvan_ar']?>" name="unvanar" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Unvan(DE)</label>
                          <input value="<?php echo $takimcek['unvan_de']?>" name="unvande" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Bio(TR)</label>
                          <textarea class="ckeditor" name="biotr"><?php echo $takimcek['bio_tr']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Bio(EN)</label>
                          <textarea class="ckeditor" name="bioen"><?php echo $takimcek['bio_en']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Bio(RU)</label>
                          <textarea class="ckeditor" name="bioru"><?php echo $takimcek['bio_ru']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Bio(AR)</label>
                          <textarea class="ckeditor" name="bioar"><?php echo $takimcek['bio_ar']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Bio(DE)</label>
                          <textarea class="ckeditor" name="biode"><?php echo $takimcek['bio_de']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Facebook</label>
                          <input value="<?php echo $takimcek['facebook']?>" name="facebook" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Twitter</label>
                          <input value="<?php echo $takimcek['twitter']?>" name="twitter" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Instagram</label>
                          <input value="<?php echo $takimcek['instagram']?>" name="instagram" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Linkedin</label>
                          <input value="<?php echo $takimcek['linkedin']?>" name="linkedin" type="text" class="form-control">
                        </div>
                        <input type="hidden" name="takim_id" value="<?php echo $takimcek['id']?>" >
                        <button type="submit" name="takimduzenle" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                    </div>
                </form>
              </div>
            </div>




<?php include "footer.php";?>