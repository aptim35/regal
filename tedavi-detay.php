<?php include "header.php";
      include "islem/baglanti.php";
      
$tedavi=$baglanti->prepare("SELECT * FROM tedaviler where id=:id");
$tedavi->execute(array(

'id'=>$_GET['id']

  ));
$tedavicek=$tedavi->fetch(PDO::FETCH_ASSOC);
?>


            
            <div class="stretch-card" style="width:1040px">
              <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Tedavi Seçenekleri Detay Sayfası</h4><br>
                        <div class="tedavi" style="width:100%;height:100%">
                          <img style="width:200px;margin-top:5px;margin-left:10px" src="images/tedavi/<?php echo $tedavicek['tedavi_gorsel']?>" alt="tedavigorsel">
                          <div class="alert alert-warning text-center" role="alert">
                            <h6>Tedavi İçeriği (TR)</h6>
                          </div>
                          <h5 style="color:black;margin-top:15px"><?php echo $tedavicek['tedavi_baslik_tr']?></h5><br>
                          <p><?php echo $tedavicek['tedavi_giris_tr']?></p>
                          <p><?php echo $tedavicek['tedavi_detay_tr']?></p><hr>
                          <div class="alert alert-warning text-center" role="alert">
                            <h6>Tedavi İçeriği (EN)</h6>
                          </div>
                          <h5 style="color:black;margin-top:15px"><?php echo $tedavicek['tedavi_baslik_en']?></h5><br>
                          <p><?php echo $tedavicek['tedavi_giris_en']?></p>
                          <p><?php echo $tedavicek['tedavi_detay_en']?></p><hr>
                          <div class="alert alert-warning text-center" role="alert">
                            <h6>Tedavi İçeriği (RU)</h6>
                          </div>
                          <h5 style="color:black;margin-top:15px"><?php echo $tedavicek['tedavi_baslik_ru']?></h5><br>
                          <p><?php echo $tedavicek['tedavi_giris_ru']?></p>
                          <p><?php echo $tedavicek['tedavi_detay_ru']?></p><hr>
                          <div class="alert alert-warning text-center" role="alert">
                            <h6>Tedavi İçeriği (AR)</h6>
                          </div>
                          <h5 style="color:black;margin-top:15px"><?php echo $tedavicek['tedavi_baslik_ar']?></h5><br>
                          <p><?php echo $tedavicek['tedavi_giris_ar']?></p>
                          <p><?php echo $tedavicek['tedavi_detay_ar']?></p><hr>
                          <div class="alert alert-warning text-center" role="alert">
                            <h6>Tedavi İçeriği (DE)</h6>
                          </div>
                          <h5 style="color:black;margin-top:15px"><?php echo $tedavicek['tedavi_baslik_de']?></h5><br>
                          <p><?php echo $tedavicek['tedavi_giris_de']?></p>
                          <p><?php echo $tedavicek['tedavi_detay_de']?></p>
                        </div>
                    </div>
                    
                </form>
              </div>
            </div>




<?php include "footer.php";?>