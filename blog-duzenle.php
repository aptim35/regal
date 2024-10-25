<?php include "header.php";
      include "islem/baglanti.php";
      
$blog=$baglanti->prepare("SELECT * FROM blog where id=:id");
$blog->execute(array(

'id'=>$_GET['id']

  ));
$blogcek=$blog->fetch(PDO::FETCH_ASSOC);
?>


            
            <div class="stretch-card" style="width:1040px">
              <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Güncel Düzenleme Sayfası</h4><br>
                      
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="exampleInputName1">Güncel Başlık(TR)</label>
                          <input value="<?php echo $blogcek['blog_baslik_tr']?>" name="basliktr" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Güncel Başlık(EN)</label>
                          <input value="<?php echo $blogcek['blog_baslik_en']?>" name="basliken" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Güncel Başlık(RU)</label>
                          <input value="<?php echo $blogcek['blog_baslik_ru']?>" name="baslikru" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Güncel Başlık(AR)</label>
                          <input value="<?php echo $blogcek['blog_baslik_ar']?>" name="baslikar" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Güncel Başlık(DE)</label>
                          <input value="<?php echo $blogcek['blog_baslik_de']?>" name="baslikde" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Güncel Detay(TR)</label>
                          <textarea class="ckeditor" name="detaytr"><?php echo $blogcek['blog_detay_tr']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Güncel Detay(EN)</label>
                          <textarea class="ckeditor" name="detayen"><?php echo $blogcek['blog_detay_en']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Güncel Detay(RU)</label>
                          <textarea class="ckeditor" name="detayru"><?php echo $blogcek['blog_detay_ru']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Güncel Detay(AR)</label>
                          <textarea class="ckeditor" name="detayar"><?php echo $blogcek['blog_detay_ar']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Güncel Detay(DE)</label>
                          <textarea class="ckeditor" name="detayde"><?php echo $blogcek['blog_detay_de']?></textarea>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Yazar</label>
                          <input value="<?php echo $blogcek['yazar']?>" name="yazar" type="text" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="exampleInputName1">Eklendiği Gün</label>
                                  <input value="<?php echo $blogcek['gun']?>" name="gun" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="exampleInputName1">Eklendiği Ay (TR)</label>
                                  <input value="<?php echo $blogcek['ay_tr']?>" name="ay" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="exampleInputName1">Eklendiği Ay (EN)</label>
                                  <input value="<?php echo $blogcek['ay_en']?>" name="ay_en" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="exampleInputName1">Eklendiği Ay (RU)</label>
                                  <input value="<?php echo $blogcek['ay_ru']?>" name="ay_ru" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="exampleInputName1">Eklendiği Ay (AR)</label>
                                  <input value="<?php echo $blogcek['ay_ar']?>" name="ay_ar" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="exampleInputName1">Eklendiği Ay (DE)</label>
                                  <input value="<?php echo $blogcek['ay_de']?>" name="ay_de" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="exampleInputName1">Eklendiği Yıl</label>
                                  <input value="<?php echo $blogcek['yil']?>" name="yil" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                            <div class="form-group">
                              <label>Fotoğraf Yükle</label><br>
                              <input type="file" name="blogfoto" class="file-upload">
                            </div>
                        <input type="hidden" name="blog_id" value="<?php echo $blogcek['id']?>" >
                        <button type="submit" name="blogduzenle" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                    </div>
                </form>
              </div>
            </div>




<?php include "footer.php";?>