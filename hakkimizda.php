<?php 

require_once 'islem/baglanti.php';
require_once "header.php";

?>

                  <div class="card">
                    <div class="card-body">
                        <div class="alert alert-warning text-center" role="alert">
                            <h6>Hakkımızda (TR)</h6>
                        </div>
                        <?php 
                            $hakkimizda=$baglanti->prepare("SELECT * FROM hakkimizda");
                            $hakkimizda->execute();
                            while ($hakkimizdacek=$hakkimizda->fetch(PDO::FETCH_ASSOC)) { ?>
                           
                            <h4 class="card-title"><?php echo $hakkimizdacek['hakkimizda_baslik']?></h4><br>
                            <p>
                               <?php echo $hakkimizdacek['hakkimizda_icerik']?>
                            </p>
                            <br>
                            <div class="alert alert-warning text-center" role="alert">
                                <h6>Hakkımızda (EN)</h6>
                            </div>
                            <h4 class="card-title"><?php echo $hakkimizdacek['hakkimizda_basliken']?></h4><br>
                            <p>
                               <?php echo $hakkimizdacek['hakkimizda_iceriken']?>
                            </p>
                            <br>
                            <div class="alert alert-warning text-center" role="alert">
                                <h6>Hakkımızda (RU)</h6>
                            </div>
                            <h4 class="card-title"><?php echo $hakkimizdacek['hakkimizda_baslikru']?></h4><br>
                            <p>
                               <?php echo $hakkimizdacek['hakkimizda_icerikru']?>
                            </p>
                            <br>
                            <div class="alert alert-warning text-center" role="alert">
                                <h6>Hakkımızda (AR)</h6>
                            </div>
                            <h4 class="card-title"><?php echo $hakkimizdacek['hakkimizda_baslikar']?></h4><br>
                            <p>
                               <?php echo $hakkimizdacek['hakkimizda_icerikar']?>
                            </p>
                            <br>
                            <div class="alert alert-warning text-center" role="alert">
                                <h6>Hakkımızda (DE)</h6>
                            </div>
                            <h4 class="card-title"><?php echo $hakkimizdacek['hakkimizda_baslikde']?></h4><br>
                            <p>
                               <?php echo $hakkimizdacek['hakkimizda_icerikde']?>
                            </p>
                            <br>
                            <a href="hakkimizda-duzenle.php"><button type="button" class="btn btn-warning btn-rounded btn-fw"><img src="images/pencil.png"></button></a>
                        <?php } ?>
                    </div>
                    
                  </div>
                  
                

 <?php include "footer.php";?>