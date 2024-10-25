<?php include "header.php";
      include "islem/baglanti.php";

?>

           <div class="col-md-5 grid-margin grid-margin-md-0 stretch-card">
              <div class="card">
                  <div class="card-body">
                    <?php 
                    $sitebilgi=$baglanti->prepare("SELECT * FROM sitebilgileri");
                    $sitebilgi->execute();
                    while ($sitebilgicek=$sitebilgi->fetch(PDO::FETCH_ASSOC)) { ?>
                    
                 <h4 class="card-title"><i class="mdi mdi-map-marker"></i> Adres</h4>
                
                  <ul class="list-ticked">
                    <li><?php echo $sitebilgicek['adres']?></li>
                  </ul>
                  <h4 class="card-title"><i class="mdi mdi-phone"></i> Telefon numaraları</h4>
                
                  <ul class="list-ticked">
                    <li><?php echo $sitebilgicek['telefon1']?></li>
                    <li><?php echo $sitebilgicek['telefon2']?></li>
                    <li><?php echo $sitebilgicek['telefon3']?></li>
                    <li><?php echo $sitebilgicek['telefon4']?></li>
                    
                  </ul>
                  <h4 class="card-title"> <i class="mdi mdi-email-open"></i> E-posta adresleri</h4>
                
                  <ul class="list-ticked">
                    <li><?php echo $sitebilgicek['mail']?></li>
                    <li><?php echo $sitebilgicek['mail2']?></li>
                    
                  </ul>
                  <h4 class="card-title">Sosyal Medya Hesapları</h4>
                
                  <ul class="list-ticked">
                    <li><i class="fa-brands fa-facebook"></i> <?php echo $sitebilgicek['facebook']?></li>
                    <li><i class="fa-brands fa-instagram"></i> <?php echo $sitebilgicek['instagram']?></li>
                    <li><i class="fa-brands fa-twitter"></i> <?php echo $sitebilgicek['twitter']?></li>
                    <li><i class="fa-brands fa-linkedin"></i> <?php echo $sitebilgicek['linkedin']?></li>
                   
                  </ul>
                  <a href="iletisim-duzenle.php?id=<?php echo $sitebilgicek['id'] ?>"><button type="button" class="btn btn-warning btn-lg btn-block" style="margin-top:45px">
                      <img src="images/pencil.png">
                    </button></a>
                    
                <?php } ?>
                </div>
                
              </div>
            </div>
            


<?php include "footer.php";?>