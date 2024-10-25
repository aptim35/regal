<?php include "header.php";
      include "islem/baglanti.php";
      
$sizdengelen=$baglanti->prepare("SELECT * FROM sizdengelen where id=:id");
$sizdengelen->execute(array(

'id'=>$_GET['id']

  ));
$sizdengelencek=$sizdengelen->fetch(PDO::FETCH_ASSOC);
?>

            
            <div class="stretch-card" style="width:1040px">
              <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Sizden Gelen Düzenleme Sayfası</h4><br>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="exampleInputName1">İsim </label>
                          <input value="<?php echo $sizdengelencek['isim']?>" name="ad" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Açıklama (TR)</label>
                          <textarea class="ckeditor" name="detaytr"><?php echo $sizdengelencek['aciklama_tr']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Açıklama (EN)</label>
                          <textarea class="ckeditor" name="detayen"><?php echo $sizdengelencek['aciklama_en']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Açıklama (RU)</label>
                          <textarea class="ckeditor" name="detayru"><?php echo $sizdengelencek['aciklama_ru']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Açıklama (AR)</label>
                          <textarea class="ckeditor" name="detayar"><?php echo $sizdengelencek['aciklama_ar']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Açıklama (DE)</label>
                          <textarea class="ckeditor" name="detayde"><?php echo $sizdengelencek['aciklama_de']?></textarea>
                        </div>
                        
                           
                        <input type="hidden" name="sizdengelen_id" value="<?php echo $sizdengelencek['id']?>" >
                        <button type="submit" name="sizdengelenduzenle" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                    </div>
                </form>
              </div>
            </div>




<?php include "footer.php";?>