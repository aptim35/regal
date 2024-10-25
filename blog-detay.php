<?php 

require_once 'islem/baglanti.php';
require_once "header.php";

$blogs=$baglanti->prepare("SELECT * FROM blog where id=:id");
$blogs->execute(array(
    
    'id'=>$_GET['id']
    
    ));
$blogcek=$blogs->fetch(PDO::FETCH_ASSOC);

?>
                  <div class="card" style="width:1040px">
                    <div class="card-body">
                        <div class="alert alert-warning text-center" role="alert">
                            <h6>Güncel İçerik (TR)</h6>
                        </div>
                        <h4 class="card-title"><?php echo $blogcek['blog_baslik_tr']?></h4><br>
                        <p><?php echo $blogcek['blog_detay_tr']?></p><hr>
                        <div class="alert alert-warning text-center" role="alert">
                            <h6>Güncel İçerik (EN)</h6>
                        </div>
                        <h4 class="card-title"><?php echo $blogcek['blog_baslik_en']?></h4><br>
                        <p><?php echo $blogcek['blog_detay_en']?></p><hr>
                        <div class="alert alert-warning text-center" role="alert">
                            <h6>Güncel İçerik (RU)</h6>
                        </div>
                        <h4 class="card-title"><?php echo $blogcek['blog_baslik_ru']?></h4><br>
                        <p><?php echo $blogcek['blog_detay_ru']?></p><hr>
                        <div class="alert alert-warning text-center" role="alert">
                            <h6>Güncel İçerik (AR)</h6>
                        </div>
                        <h4 class="card-title"><?php echo $blogcek['blog_baslik_ar']?></h4><br>
                        <p><?php echo $blogcek['blog_detay_ar']?></p>
                    </div>
                    
                  </div>
                  
                

 <?php include "footer.php";?>