<?php include "header.php";
      include "islem/baglanti.php";
      
$terim=$baglanti->prepare("SELECT * FROM tupbebeksozluk where id=:id");
$terim->execute(array(

'id'=>$_GET['id']

  ));
$terimcek=$terim->fetch(PDO::FETCH_ASSOC);
?>

            <div class="stretch-card" style="width:1040px">
              <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Tüp Bebek Sözlük Düzenleme Sayfası</h4><br>
                      
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="exampleInputName1">Terim (TR)</label>
                          <input value="<?php echo $terimcek['terim_tr']?>" name="terimtr" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Terim (EN)</label>
                          <input value="<?php echo $terimcek['terim_en']?>" name="terimen" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Terim (RU)</label>
                          <input value="<?php echo $terimcek['terim_ru']?>" name="terimru" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Terim (AR)</label>
                          <input value="<?php echo $terimcek['terim_ar']?>" name="terimar" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Terim (DE)</label>
                          <input value="<?php echo $terimcek['terim_de']?>" name="terimde" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Açıklama (TR)</label>
                          <input value="<?php echo $terimcek['aciklama_tr']?>" name="aciklamatr" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Açıklama (EN)</label>
                          <input value="<?php echo $terimcek['aciklama_en']?>" name="aciklamaen" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Açıklama (RU)</label>
                          <input value="<?php echo $terimcek['aciklama_ru']?>" name="aciklamaru" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Açıklama (AR)</label>
                          <input value="<?php echo $terimcek['aciklama_ar']?>" name="aciklamaar" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Açıklama (DE)</label>
                          <input value="<?php echo $terimcek['aciklama_de']?>" name="aciklamade" type="text" class="form-control">
                        </div>
                           
                        <input type="hidden" name="sozluk_id" value="<?php echo $terimcek['id']?>" >
                        <button type="submit" name="sozlukduzenle" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                    </div>
                </form>
              </div>
            </div>




<?php include "footer.php";?>