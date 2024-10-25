<?php 

require_once 'islem/baglanti.php';
require_once "header.php";

$tupbebek=$baglanti->prepare("SELECT * FROM tupbebek where id=:id");
$tupbebek->execute(array(
    
    'id'=>$_GET['id']
    
    ));
$tupbebekcek=$tupbebek->fetch(PDO::FETCH_ASSOC);

?>
                  <div class="card" style="width:1040px">
                    <div class="card-body">
                        <div class="alert alert-warning text-center" role="alert">
                            <h6>Tüp Bebek İçerik (TR)</h6>
                        </div>
                        <h4 class="card-title"><?php echo $tupbebekcek['yazi_baslik_tr']?></h4><br>
                        <p><?php echo $tupbebekcek['yazi_detay_tr']?></p><hr>
                        <div class="alert alert-warning text-center" role="alert">
                            <h6>Tüp Bebek İçerik (EN)</h6>
                        </div>
                        <h4 class="card-title"><?php echo $tupbebekcek['yazi_baslik_en']?></h4><br>
                        <p><?php echo $tupbebekcek['yazi_detay_en']?></p><hr>
                        <div class="alert alert-warning text-center" role="alert">
                            <h6>Tüp Bebek İçerik (RU)</h6>
                        </div>
                        <h4 class="card-title"><?php echo $tupbebekcek['yazi_baslik_ru']?></h4><br>
                        <p><?php echo $tupbebekcek['yazi_detay_ru']?></p><hr>
                        <div class="alert alert-warning text-center" role="alert">
                            <h6>Tüp Bebek İçerik (AR)</h6>
                        </div>
                        <h4 class="card-title"><?php echo $tupbebekcek['yazi_baslik_ar']?></h4><br>
                        <p><?php echo $tupbebekcek['yazi_detay_ar']?></p><hr>
                        <div class="alert alert-warning text-center" role="alert">
                            <h6>Tüp Bebek İçerik (DE)</h6>
                        </div>
                        <h4 class="card-title"><?php echo $tupbebekcek['yazi_baslik_de']?></h4><br>
                        <p><?php echo $tupbebekcek['yazi_detay_de']?></p>
                    </div>
                    
                  </div>
                  
                

 <?php include "footer.php";?>