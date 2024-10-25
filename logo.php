<?php include "header.php";
      include "islem/baglanti.php";
      
$sitebilgi=$baglanti->prepare("SELECT * FROM sitebilgileri");
$sitebilgi->execute();
$sitebilgicek=$sitebilgi->fetch(PDO::FETCH_ASSOC);
?>
            
           
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row my-3">
                        <div class="col-md-12">
                            <h5>Logo ve Favicon</h5>
                        </div>
                    </div>
                    <div class="card" style="width:600px;height:auto;background:#ECEFF1">
                        <h6 style="color:black;margin-top:20px;margin-left:20px">Menü Logo:</h6><br>
                        <img style="width:160px;height:90px" src="images/logo/<?=$sitebilgicek['logo'];?>"><br>
                        <h6 style="color:black;margin-top:20px;margin-left:20px">Favicon:</h6><br>
                        <img style="width:40px;height:40px;margin-left:20px" src="images/logo/<?=$sitebilgicek['favicon'];?>"><br>
                        <h6 style="color:black;margin-top:20px;margin-left:20px">Footer Logo:</h6><br>
                        <img style="width:160px;height:90px" src="images/logo/<?=$sitebilgicek['footer_logo'];?>"><br>
                        
                        
                    <a href="logo-duzenle.php?id=<?php echo $sitebilgicek['id'] ?>"><button type="button" class="btn btn-warning btn-lg btn-block" style="margin-top:45px">
                      <img src="images/pencil.png">
                    </button></a>
                    
                    </div>
                   


                </section>
            </div>
        </div>
    </div>


<?php include "footer.php";?>