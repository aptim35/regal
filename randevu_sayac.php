<?php include "header.php";
      include "islem/baglanti.php";
      
$randevu=$baglanti->prepare("SELECT * FROM sitebilgileri");
$randevu->execute();
$randevucek=$randevu->fetch(PDO::FETCH_ASSOC);
$sayac=$baglanti->prepare("SELECT * FROM sayac");
$sayac->execute();
$sayacgetir=$sayac->fetch(PDO::FETCH_ASSOC);
?>
            
           
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row my-3">
                        <div class="col-md-12">
                            <h5>Randevu & Sayaç </h5><br>
                        </div>
                        <div class="col-md-6">
                            <div class="card" style="width:100%;height:700px;margin-left:30px">
                                <div class="alert alert-success" role="alert">
                                        Ana Sayfa Sayaç Alanı Düzenleme
                                    </div>
                                <div class="card-body">
                                    <h5 class="card-title"><?=$sayacgetir['isim1'];?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?=$sayacgetir['deger1'];?></h6><hr>
                                    <h5 class="card-title"><?=$sayacgetir['isim2'];?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?=$sayacgetir['deger2'];?></h6>
                                    <p class="card-text"><?=$sayacgetir['basarioran2'];?></p><hr>
                                    <h5 class="card-title"><?=$sayacgetir['isim3'];?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?=$sayacgetir['deger3'];?></h6>
                                    <p class="card-text"><?=$sayacgetir['basarioran3'];?></p><hr>
                                    <h5 class="card-title"><?=$sayacgetir['isim4'];?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?=$sayacgetir['deger4'];?></h6>
                                    <p class="card-text"><?=$sayacgetir['basarioran4'];?></p><hr>
                                    <h5 class="card-title"><?=$sayacgetir['isim5'];?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted"><?=$sayacgetir['deger5'];?></h6>
                                    <p class="card-text"><?=$sayacgetir['basarioran5'];?></p><br>
                                    
                                    <a href="sayac-duzenle.php?id=<?php echo $sayacgetir['id'] ?>"><button class="btn btn-warning">Düzenle</button></a>
                                </div>
                            </div>
                       </div>
                       <div class="col-md-6">
                            <div class="card" style="width:100%;height:700px;margin-left:30px">
                                <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                                    <div class="alert alert-success" role="alert">
                                        Ana Sayfa Randevu Alanı Düzenleme
                                    </div>
                                    <div class="form-group" style="margin-left:20px">
                                        <label>Randevu alanındaki fotoğraf:</label><br>
                                        <img src="images/<?=$randevucek['randevu_gorsel'];?>" style="width:350px">
                                    </div>
                                    <div class="form-group" style="margin-left:20px">
                                        <label>Fotoğraf Seç</label><br>
                                        <input type="file" name="randevufoto" class="file-upload">
                                    </div>
                                    <input type="hidden" name="randevu_id" value="<?php echo $randevucek['id']?>">
                                    <button type="submit" name="randevugorselduzenle" class="btn btn-primary mr-2" style="margin-left:20px">Kaydet</button>
                                </form>
                            </div>
                       </div>
                       
                    </div>
                    


                </section>
            </div>
        </div>
    </div>


<?php include "footer.php";?>