<?php include "header.php";
      include "islem/baglanti.php";

$resim=$baglanti->prepare("SELECT * FROM portfoy where resim_id=:resim_id");
$resim->execute(array(

'resim_id'=>$_GET['id']

  ));
$resimcek=$resim->fetch(PDO::FETCH_ASSOC);

?>
    <div class="stretch-card" style="width:1040px">
            <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <form class="forms-sample">
                          <div class="form-group">
                          <label for="exampleInputName1">Kategori Seç</label>
                          <select class="form-control select2" name="resimkategori" style="width:100%">
                            <?php
                            $katid=$resimcek['kategori_id'];
                            $kategori=$baglanti->prepare("SELECT * FROM portfoykategori order by kategori_id ASC");
                            $kategori->execute();
                            while($kategoricek=$kategori->fetch(PDO::FETCH_ASSOC)) {
                            $kategoriid=$kategoricek['kategori_id'];
                            ?>
                              <option <?php if($katid==$kategoriid){
                                  echo "selected";
                              } ?> value="<?=$kategoricek["kategori_id"];?>"><?=$kategoricek['kategori_adi'];?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Mevcut Resim</label><br>
                          <img src="images/portföy/<?=$resimcek['resim_adi'];?>" style="width:200px">
                        </div>
                        <div class="form-group">
                          <label>Resim Yükle</label><br>
                          <input type="file" name="portföyfoto" class="file-upload">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Resim Durum</label>
                          <select class="form-control select2" name="durum" style="width:100%">
                              <option value="1" <?php if($resimcek['resim_durum']=="1"){echo 'selected';
                              }?>>Aktif</option>
                              <option value="0" <?php if($resimcek['resim_durum']=="0"){echo 'selected';
                              }?>>Pasif</option>
                          </select>
                        </div>
                        <input type="hidden" name="katsid" value="<?=$_GET['katid'];?>">
                        <input type="hidden" name="id" value="<?php echo $resimcek['resim_id']?>">
                        <input type="hidden" name="eskiresim" value="<?php echo $resimcek['resim_adi']?>">
                        
       
                        <button type="submit" name="resimduzenle" class="btn btn-primary mr-2">Güncelle</button>
                        
                      </form>
                    </div>
                </form>
            </div>
    </div>
        


<?php include "footer.php";?>