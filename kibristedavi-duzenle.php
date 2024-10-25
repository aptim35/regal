<?php include "header.php";
      include "islem/baglanti.php";
      
$tupbebektedavi=$baglanti->prepare("SELECT * FROM kibristupbebektedavisi where id=:id");
$tupbebektedavi->execute(array(
    
    'id'=>$_GET['id']
    
    ));
$tupbebektedavicek=$tupbebektedavi->fetch(PDO::FETCH_ASSOC);
?>
                <form action="islem/islem.php" method="POST">
                  <div class="card" style="width:1000px">
                    <div class="card-body">
                      <input type="hidden" name="tupbebektedavi_id" value="<?php echo $tupbebektedavicek['id'] ?>" >
                      <h4 class="card-title">Başlık(TR)</h4><br>
                      <input value="<?php echo $tupbebektedavicek['basliktr']?>" name="basliktr" type="text" class="form-control" style="width:380px;"><br>
                      <h4 class="card-title">Başlık(EN)</h4><br>
                      <input value="<?php echo $tupbebektedavicek['basliken']?>" name="basliken" type="text" class="form-control" style="width:380px;"><br>
                      <h4 class="card-title">Başlık(RU)</h4><br>
                      <input value="<?php echo $tupbebektedavicek['baslikru']?>" name="baslikru" type="text" class="form-control" style="width:380px;"><br>
                      <h4 class="card-title">Başlık(AR)</h4><br>
                      <input value="<?php echo $tupbebektedavicek['baslikar']?>" name="baslikar" type="text" class="form-control" style="width:380px;"><br>
                      <h4 class="card-title">Başlık(DE)</h4><br>
                      <input value="<?php echo $tupbebektedavicek['baslikde']?>" name="baslikde" type="text" class="form-control" style="width:380px;"><br>
                      
                      <h4 class="card-title">Detay(TR)</h4><br>
                      <textarea class="ckeditor" name="iceriktr"><?php echo $tupbebektedavicek['iceriktr']?></textarea><br>
                      <h4 class="card-title">Detay(EN)</h4><br>
                      <textarea class="ckeditor" name="iceriken"><?php echo $tupbebektedavicek['iceriken']?></textarea><br>
                      <h4 class="card-title">Detay(RU)</h4><br>
                      <textarea class="ckeditor" name="icerikru"><?php echo $tupbebektedavicek['icerikru']?></textarea><br>
                      <h4 class="card-title">Detay(AR)</h4><br>
                      <textarea class="ckeditor" name="icerikar"><?php echo $tupbebektedavicek['icerikar']?></textarea><br>
                      <h4 class="card-title">Detay(DE)</h4><br>
                      <textarea class="ckeditor" name="icerikde"><?php echo $tupbebektedavicek['icerikde']?></textarea><br>
                      
                      <button type="submit" name="kibristedaviduzenle" class="btn btn-info btn-rounded btn-fw">Kaydet</button>
                    </div>
                    
                  </div>
                </form>
                  
                

<?php include "footer.php";?>