<?php include "header.php";
      include "islem/baglanti.php";
      
$takim=$baglanti->prepare("SELECT * FROM takim where id=:id");
$takim->execute(array(

'id'=>$_GET['id']

  ));
$takimcek=$takim->fetch(PDO::FETCH_ASSOC);
?>


            
            <div class="stretch-card" style="width:1040px">
              <div class="card">
                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                    <div class="card-body">
                      <h4 class="card-title">Takım Detay Sayfası</h4><br>
                        <div class="takim">
                          <img style="width:320px;height:270px;margin-top:-25px" src="images/takim/<?php echo $takimcek['fotograf']?>" alt="cahitcenksoyfoto">
                          <h5><?php echo $takimcek['isim_soyisim']?></h5>
                          <h6><?php echo $takimcek['unvan_tr']?></h6>
                          <h6><i class="fa-brands fa-facebook"></i> <?php echo $takimcek['facebook']?></h6>
                          <h6><i class="fa-brands fa-twitter"></i> <?php echo $takimcek['twitter']?></h6>
                          <h6><i class="fa-brands fa-instagram"></i> <?php echo $takimcek['instagram']?></h6>
                          <h6><i class="fa-brands fa-linkedin"></i> <?php echo $takimcek['linkedin']?></h6>
                          <a href="takim-duzenle.php?id=<?php echo $takimcek['id'] ?>"><button style="float:right;margin-top:-290px" class="btn btn-default"><img src="images/pencil.png"></button></a>
                          <a href="islem/islem.php?takimsil&id=<?php echo $takimcek['id'] ?>"><button style="float:right;margin-top:-250px" class="btn btn-default"><img src="images/clear.png"></button></a>
                        </div>
                    </div>
                    
                </form>
              </div>
            </div>




<?php include "footer.php";?>