<?php 

require_once 'islem/baglanti.php';
require_once "header.php";

?>

                  <div class="card">
                    <div class="card-body">
                            <div class="alert alert-warning text-center" role="alert">
                                <h6>Kıbrıs Tüp Bebek Tedavisi (TR)</h6>
                            </div>
                            <?php 
                            $tupbebektedavi=$baglanti->prepare("SELECT * FROM kibristupbebektedavisi");
                            $tupbebektedavi->execute();
                            while ($tupbebektedavicek=$tupbebektedavi->fetch(PDO::FETCH_ASSOC)) { ?>
                           
                            <h4 class="card-title"><?php echo $tupbebektedavicek['basliktr']?></h4><br>
                            <p>
                               <?php echo $tupbebektedavicek['iceriktr']?>
                            </p>
                            <br>
                            <div class="alert alert-warning text-center" role="alert">
                                <h6>Kıbrıs Tüp Bebek Tedavisi (EN)</h6>
                            </div>
                            <h4 class="card-title"><?php echo $tupbebektedavicek['basliken']?></h4><br>
                            <p>
                               <?php echo $tupbebektedavicek['iceriken']?>
                            </p><br>
                            <div class="alert alert-warning text-center" role="alert">
                                <h6>Kıbrıs Tüp Bebek Tedavisi (RU)</h6>
                            </div>
                            <h4 class="card-title"><?php echo $tupbebektedavicek['baslikru']?></h4><br>
                            <p>
                               <?php echo $tupbebektedavicek['icerikru']?>
                            </p><br>
                            <div class="alert alert-warning text-center" role="alert">
                                <h6>Kıbrıs Tüp Bebek Tedavisi (AR)</h6>
                            </div>
                            <h4 class="card-title"><?php echo $tupbebektedavicek['baslikar']?></h4><br>
                            <p>
                               <?php echo $tupbebektedavicek['icerikar']?>
                            </p><br>
                            <div class="alert alert-warning text-center" role="alert">
                                <h6>Kıbrıs Tüp Bebek Tedavisi (DE)</h6>
                            </div>
                            <h4 class="card-title"><?php echo $tupbebektedavicek['baslikde']?></h4><br>
                            <p>
                               <?php echo $tupbebektedavicek['icerikde']?>
                            </p><br>
                            
                            <a href="kibristedavi-duzenle.php?id=<?=$tupbebektedavicek['id'];?>"><button type="button" class="btn btn-warning btn-rounded btn-fw"><img src="images/pencil.png"></button></a>
                        <?php } ?>
                    </div>
                    
                  </div>
                  
                

 <?php include "footer.php";?>