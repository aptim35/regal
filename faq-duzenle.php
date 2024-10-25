<?php include "header.php";
      include "islem/baglanti.php";
      
$soru=$baglanti->prepare("SELECT * FROM faq where id=:id");
$soru->execute(array(

'id'=>$_GET['id']

  ));
$sorucek=$soru->fetch(PDO::FETCH_ASSOC);
?>


            
            <div class="stretch-card" style="width:1040px">
              <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Sık Sorulanlar Düzenleme Sayfası</h4><br>
                      
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="exampleInputName1">Soru (TR)</label>
                          <input value="<?php echo $sorucek['soru_tr']?>" name="sorutr" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Cevap (TR)</label>
                          <textarea class="ckeditor" name="cevaptr"><?php echo $sorucek['cevap_tr']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Soru (EN)</label>
                          <input value="<?php echo $sorucek['soru_en']?>" name="soruen" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Cevap (EN)</label>
                          <textarea class="ckeditor" name="cevapen"><?php echo $sorucek['cevap_en']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Soru (RU)</label>
                          <input value="<?php echo $sorucek['soru_ru']?>" name="soruru" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Cevap (RU)</label>
                          <textarea class="ckeditor" name="cevapru"><?php echo $sorucek['cevap_ru']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Soru (AR)</label>
                          <input value="<?php echo $sorucek['soru_ar']?>" name="soruar" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Cevap (AR)</label>
                          <textarea class="ckeditor" name="cevapar"><?php echo $sorucek['cevap_ar']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Soru (DE)</label>
                          <input value="<?php echo $sorucek['soru_de']?>" name="sorude" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Cevap (DE)</label>
                          <textarea class="ckeditor" name="cevapde"><?php echo $sorucek['cevap_de']?></textarea>
                        </div>
                        
                           
                        <input type="hidden" name="soru_id" value="<?php echo $sorucek['id']?>" >
                        <button type="submit" name="soruduzenle" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                    </div>
                </form>
              </div>
            </div>




<?php include "footer.php";?>