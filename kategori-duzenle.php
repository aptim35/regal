<?php include "header.php";
      include "islem/baglanti.php";
      
$kategori=$baglanti->prepare("SELECT * FROM portfoykategori where kategori_id=:kategori_id");
$kategori->execute(array(

'kategori_id'=>$_GET['id']

  ));
$kategoricek=$kategori->fetch(PDO::FETCH_ASSOC);
?>
            <div class="stretch-card" style="width:1040px">
              <div class="card">
                  <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Portföy Kategori Düzenleme Sayfası</h4><br>
                      <form class="forms-sample">
                        <div class="form-group">
                          <label for="exampleInputName1">Kategori Adı(TR)</label>
                          <input value="<?php echo $kategoricek['kategori_adi']?>" name="kataditr" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Kategori Adı(EN)</label>
                          <input value="<?php echo $kategoricek['kategori_adi_en']?>" name="katadien" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputName1">Kategori Durum</label>
                          <select class="form-control select2" name="durum" style="width:100%">
                              <option value="1" <?php if($kategoricek['kategori_durum']=="1"){echo 'selected';
                              }?>>Aktif</option>
                              <option value="0" <?php if($kategoricek['kategori_durum']=="0"){echo 'selected';
                              }?>>Pasif</option>
                          </select>
                        </div>
               
                        <input type="hidden" name="kategoriid" value="<?php echo $kategoricek['kategori_id']?>" >
                        <button type="submit" name="kategoriduzenle" class="btn btn-primary mr-2">Kaydet</button>
                        
                      </form>
                      
                    </div>
                </form>
              </div>
            </div>




<?php include "footer.php";?>