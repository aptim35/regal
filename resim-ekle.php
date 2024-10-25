<?php include "header.php";
      include "islem/baglanti.php";

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
                            $katid=$_GET['katid'];
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
                          <label>Resim Yükle</label><br>
                          <input type="file" name="portföyfoto" class="file-upload">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Durum</label>
                          <select class="form-control select2" name="durum" style="width:100%">
                              <option value="1" selected="selected">Aktif</option>
                              <option value="0">Pasif</option>
                          </select>
                        </div>
                        <input type="hidden" name="katsid" value="<?=$_GET['katid'];?>">
       
                        <button type="submit" name="resimkaydet" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                    </div>
                </form>
            </div>
    </div>
        


<?php include "footer.php";?>