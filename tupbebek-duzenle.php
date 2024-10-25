<?php include "header.php";
      include "islem/baglanti.php";
      
$tupbebek=$baglanti->prepare("SELECT * FROM tupbebek where id=:id");
$tupbebek->execute(array(

'id'=>$_GET['id']

  ));
$tupbebekcek=$tupbebek->fetch(PDO::FETCH_ASSOC);
?>

            <div class="stretch-card" style="width:1040px">
              <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Tüp Bebek Düzenleme Sayfası</h4><br>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="exampleInputName1">Tüp Bebek Başlık(TR)</label>
                          <input value="<?php echo $tupbebekcek['yazi_baslik_tr']?>" name="basliktr" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tüp Bebek Başlık(EN)</label>
                          <input value="<?php echo $tupbebekcek['yazi_baslik_en']?>" name="basliken" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tüp Bebek Başlık(RU)</label>
                          <input value="<?php echo $tupbebekcek['yazi_baslik_ru']?>" name="baslikru" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tüp Bebek Başlık(AR)</label>
                          <input value="<?php echo $tupbebekcek['yazi_baslik_ar']?>" name="baslikar" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tüp Bebek Başlık(DE)</label>
                          <input value="<?php echo $tupbebekcek['yazi_baslik_de']?>" name="baslikde" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tüp Bebek Detay(TR)</label>
                          <textarea class="ckeditor" name="detaytr"><?php echo $tupbebekcek['yazi_detay_tr']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tüp Bebek Detay(EN)</label>
                          <textarea class="ckeditor" name="detayen"><?php echo $tupbebekcek['yazi_detay_en']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tüp Bebek Detay(RU)</label>
                          <textarea class="ckeditor" name="detayru"><?php echo $tupbebekcek['yazi_detay_ru']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tüp Bebek Detay(AR)</label>
                          <textarea class="ckeditor" name="detayar"><?php echo $tupbebekcek['yazi_detay_ar']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Tüp Bebek Detay(DE)</label>
                          <textarea class="ckeditor" name="detayde"><?php echo $tupbebekcek['yazi_detay_de']?></textarea>
                        </div>
                        <input type="hidden" name="tupbebek_id" value="<?php echo $tupbebekcek['id']?>" >
                        <button type="submit" name="tupbebekduzenle" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                    </div>
                </form>
              </div>
            </div>




<?php include "footer.php";?>