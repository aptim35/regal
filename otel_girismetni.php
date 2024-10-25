<?php 
require_once 'islem/baglanti.php';
require_once "header.php";
$otellersayfasi=$baglanti->prepare("SELECT * FROM otelsayfasi_detay");
$otellersayfasi->execute();
$girismetni=$otellersayfasi->fetch(PDO::FETCH_ASSOC);
?>

                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                  <div class="card" style="width:900px;margin-left:30px">
                    <div class="card-body">
                        <div class="alert alert-warning text-center" role="alert">
                            <h6>Görsel</h6>
                        </div>
                        <div class="form-group">
                            <label>Fotoğraf Yükle</label><br>
                            <input type="file" name="gorsel" class="file-upload" accept="image/png, image/jpeg">
                        </div>
                        <div class="otelimg">
                            <img src="images/otel/<?php echo $girismetni['gorsel']?>" style="width:100%;padding:20px">
                        </div>
                        <div class="alert alert-warning text-center" role="alert">
                            <h6>Anlaşmalı Oteller(TR)</h6>
                        </div>
                        <textarea class="ckeditor" name="girisyazisi"><?php echo $girismetni['girismetni_tr']?></textarea><br>
                        <div class="alert alert-warning text-center" role="alert">
                            <h6>Anlaşmalı Oteller(EN)</h6>
                        </div>
                        <textarea class="ckeditor" name="girisyazisien"><?php echo $girismetni['girismetni_en']?></textarea><br>
                        <div class="alert alert-warning text-center" role="alert">
                            <h6>Anlaşmalı Oteller(RU)</h6>
                        </div>
                        <textarea class="ckeditor" name="girisyazisiru"><?php echo $girismetni['girismetni_ru']?></textarea><br>
                        <div class="alert alert-warning text-center" role="alert">
                            <h6>Anlaşmalı Oteller(AR)</h6>
                        </div>
                        <textarea class="ckeditor" name="girisyazisiar"><?php echo $girismetni['girismetni_ar']?></textarea><br>
                        <div class="alert alert-warning text-center" role="alert">
                            <h6>Anlaşmalı Oteller(DE)</h6>
                        </div>
                        <textarea class="ckeditor" name="girisyaziside"><?php echo $girismetni['girismetni_de']?></textarea><br>
                        
                        
                        <button type="submit" name="girismetniduzenle" class="btn btn-warning">Düzenle</button>
                      
                    </div>
                    
                  </div>
                </form>
                

 <?php include "footer.php";?>