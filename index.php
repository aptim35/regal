<?php

include "header.php";
include "islem/baglanti.php";
$bio=$baglanti->prepare("SELECT * FROM cahitcenksoy");
$bio->execute();
$biocek=$bio->fetch(PDO::FETCH_ASSOC);
?>

            <div class="stretch-card" style="width:1040px">
              <div class="card">
                  <div class="alert alert-warning text-center" role="alert">
                       <a href="tedavi-ekle.php" style="color:black">TEDAVİ EKLE</a>
                    </div>
                    <div class="alert alert-info text-center" role="alert">
                       <a href="blog-ekle.php" style="color:black">BLOG YAZISI EKLE</a>
                    </div>
                    <div class="alert alert-success text-center" role="alert">
                       <a href="faq.php" style="color:black">SIK SORULANLAR</a>
                    </div>
                    <div class="alert alert-primary text-center" role="alert">
                      <a href="kibristupbebektedavisi.php" style="color:black">KIBRIS TÜP BEBEK TEDAVİSİ</a>
                    </div>
                    <div class="card-body">
                        <div class="takim" style="background:#E0E0E0;margin-top:0px;width:100%;height:100%">
                          <img style="width:250px;margin-top:-25px" src="images/takim/<?php echo $biocek['cahit_foto']?>" alt="Cahit Cenksoy">
                          <h5><?php echo $biocek['isim_soyisim']?></h5>
                          <h6><?php echo $biocek['unvan_tr']?></h6>
                          <h6><?php echo $biocek['bio_tr']?></h6>
                          <img style="width:250px;margin-top:-25px" src="images/takim/<?php echo $biocek['imza_foto']?>" alt="Cahit Cenksoy">
                        </div>
                    </div>
                    
                    
              </div>
              
            </div>

<?php include "footer.php";?>