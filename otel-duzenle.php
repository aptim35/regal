<?php include "header.php";
      include "islem/baglanti.php";
      
$otel=$baglanti->prepare("SELECT * FROM anlasmalioteller where id=:id");
$otel->execute(array(

'id'=>$_GET['id']

  ));
$otelcek=$otel->fetch(PDO::FETCH_ASSOC);
?>

            <div class="stretch-card" style="width:1040px">
              <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Otel Düzenleme Sayfası</h4><br>
                     <form class="forms-sample">
                        <div class="form-group">
                          <label for="exampleInputName1">Otel Logo:</label>
                          <img style="width:150px" src="images/otel/<?=$otelcek['otel_logo']?>">
                       </div>
                        <div class="form-group">
                            <label>Fotoğraf Yükle</label><br>
                            <input type="file" name="otelfoto" class="file-upload" accept="image/png, image/jpeg">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel İsim(TR)</label>
                          <input value="<?php echo $otelcek['otel_isim_tr']?>" name="isimtr" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel İsim(EN)</label>
                          <input value="<?php echo $otelcek['otel_isim_en']?>" name="isimen" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel İsim(RU)</label>
                          <input value="<?php echo $otelcek['otel_isim_ru']?>" name="isimru" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel İsim(AR)</label>
                          <input value="<?php echo $otelcek['otel_isim_ar']?>" name="isimar" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel İsim(DE)</label>
                          <input value="<?php echo $otelcek['otel_isim_de']?>" name="isimde" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel Açıklama(TR)</label>
                          <textarea class="ckeditor" name="aciklamatr"><?php echo $otelcek['otel_aciklama_tr']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel Açıklama(EN)</label>
                          <textarea class="ckeditor" name="aciklamaen"><?php echo $otelcek['otel_aciklama_en']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel Açıklama(RU)</label>
                          <textarea class="ckeditor" name="aciklamaru"><?php echo $otelcek['otel_aciklama_ru']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel Açıklama(AR)</label>
                          <textarea class="ckeditor" name="aciklamaar"><?php echo $otelcek['otel_aciklama_ar']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel Açıklama(DE)</label>
                          <textarea class="ckeditor" name="aciklamade"><?php echo $otelcek['otel_aciklama_de']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Otel Link</label>
                          <input value="<?php echo $otelcek['otel_link']?>" name="link" type="text" class="form-control">
                        </div>

                        <input type="hidden" name="otel_id" value="<?php echo $otelcek['id']?>" >
                        <button type="submit" name="otelduzenle" class="btn btn-primary mr-2">Kaydet</button>
                      </form>
                    </div>
                </form>
              </div>
            </div>




<?php include "footer.php";?>