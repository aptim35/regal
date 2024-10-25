<?php include "header.php";
      include "islem/baglanti.php";
      
$slider=$baglanti->prepare("SELECT * FROM web_slider where id=:id");
$slider->execute(array(

'id'=>$_GET['id']

  ));
$slidercek=$slider->fetch(PDO::FETCH_ASSOC);
?>


            
            <div class="stretch-card" style="width:1040px">
              <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Slider Düzenleme Sayfası</h4><br>
                      
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="exampleInputName1">Slider Üst Başlık(TR)</label>
                          <input value="<?php echo $slidercek['slider_yazitr']?>" name="aciklamatr" type="text" class="form-control" id="exampleInputName1">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Slider Üst Başlık(EN)</label>
                          <input value="<?php echo $slidercek['slider_yazien']?>" name="aciklamaen" type="text" class="form-control" id="exampleInputName1">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Slider Üst Başlık(RU)</label>
                          <input value="<?php echo $slidercek['slider_yaziru']?>" name="aciklamaru" type="text" class="form-control" id="exampleInputName1">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Slider Üst Başlık(AR)</label>
                          <input value="<?php echo $slidercek['slider_yaziar']?>" name="aciklamaar" type="text" class="form-control" id="exampleInputName1">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Slider Üst Başlık(DE)</label>
                          <input value="<?php echo $slidercek['slider_yazide']?>" name="aciklamade" type="text" class="form-control" id="exampleInputName1">
                        </div>
                        <hr>
                        <div class="form-group">
                          <label for="exampleInputName1">Slider Alt Başlık(TR)</label>
                          <input value="<?php echo $slidercek['altbasliktr']?>" name="altbasliktr" type="text" class="form-control" id="exampleInputName1">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Slider Alt Başlık(EN)</label>
                          <input value="<?php echo $slidercek['altbasliken']?>" name="altbasliken" type="text" class="form-control" id="exampleInputName1">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Slider Alt Başlık(RU)</label>
                          <input value="<?php echo $slidercek['altbaslikru']?>" name="altbaslikru" type="text" class="form-control" id="exampleInputName1">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Slider Alt Başlık(AR)</label>
                          <input value="<?php echo $slidercek['altbaslikar']?>" name="altbaslikar" type="text" class="form-control" id="exampleInputName1">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Slider Alt Başlık(DE)</label>
                          <input value="<?php echo $slidercek['altbaslikde']?>" name="altbaslikde" type="text" class="form-control" id="exampleInputName1">
                        </div>
                        <div class="form-group">
                          <label>Slider:</label><br>
                          <img src="images/slider/<?=$slidercek['slider_foto'];?>" style="width:250px">
                        </div>
                        <div class="form-group">
                          <label>Slider Fotoğraf Yükle</label><br>
                          <input type="file" name="sliderfoto" class="file-upload">
                        </div>
                        <input type="hidden" name="slider_id" value="<?php echo $slidercek['id']?>" >
                        <button type="submit" name="sliderduzenle" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                    </div>
                </form><hr>
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Slider Video Düzenleme</h4><br>
                      <form class="forms-sample">
                          <div class="form-group">
                          <label>Video:</label><br>
                          <p><?php echo $slidercek['video']?></p>
                        </div>
                        <div class="form-group">
                          <label>Slider Video Yükle</label><br>
                          <input type="file" name="slidervideo" class="file-upload">
                        </div>
                        <input type="hidden" name="video_id" value="<?php echo $slidercek['id']?>" >
                        <button type="submit" name="videoduzenle" class="btn btn-primary mr-2">Kaydet</button>
                      </form>
                    </div>
                </form><hr>
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Video Poster Düzenleme</h4><br>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label>Video Poster:</label><br>
                          <img src="images/slider/<?=$slidercek['video_poster'];?>" style="width:250px">
                        </div>
                        <div class="form-group">
                          <label>Video Poster Yükle</label><br>
                          <input type="file" name="videoposter" class="file-upload">
                        </div>
                        <input type="hidden" name="poster_id" value="<?php echo $slidercek['id']?>" >
                        <button type="submit" name="posterduzenle" class="btn btn-primary mr-2">Kaydet</button>
                      </form>
                    </div>
                </form>
              </div>
            </div>




<?php include "footer.php";?>