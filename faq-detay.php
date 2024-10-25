<?php 

require_once 'islem/baglanti.php';
require_once "header.php";

$soru=$baglanti->prepare("SELECT * FROM faq where id=:id");
$soru->execute(array(
    
    'id'=>$_GET['id']
    
    ));
$sorucek=$soru->fetch(PDO::FETCH_ASSOC);

?>
                  <div class="card" style="width:1040px">
                    <div class="card-body">
                        <div class="alert alert-warning text-center" role="alert">
                            <h6>Soru (TR)</h6>
                        </div>
                        <h4 class="card-title"><?php echo $sorucek['soru_tr']?></h4><br>
                        <p><?php echo $sorucek['cevap_tr']?></p><hr>
                        <div class="alert alert-warning text-center" role="alert">
                            <h6>Soru (EN)</h6>
                        </div>
                        <h4 class="card-title"><?php echo $sorucek['soru_en']?></h4><br>
                        <p><?php echo $sorucek['cevap_en']?></p><hr>
                        <div class="alert alert-warning text-center" role="alert">
                            <h6>Soru (RU)</h6>
                        </div>
                        <h4 class="card-title"><?php echo $sorucek['soru_ru']?></h4><br>
                        <p><?php echo $sorucek['cevap_ru']?></p><hr>
                        <div class="alert alert-warning text-center" role="alert">
                            <h6>Soru (AR)</h6>
                        </div>
                        <h4 class="card-title"><?php echo $sorucek['soru_ar']?></h4><br>
                        <p><?php echo $sorucek['cevap_ar']?></p><hr>
                        <div class="alert alert-warning text-center" role="alert">
                            <h6>Soru (DE)</h6>
                        </div>
                        <h4 class="card-title"><?php echo $sorucek['soru_de']?></h4><br>
                        <p><?php echo $sorucek['cevap_de']?></p>
                        
                        
                    </div>
                    
                  </div>
                  
                

 <?php include "footer.php";?>