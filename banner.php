<?php include "header.php";
      include "islem/baglanti.php";
      
$banner=$baglanti->prepare("SELECT * FROM web_slider");
$banner->execute();
$bannercek=$banner->fetch(PDO::FETCH_ASSOC);
?>
            
           
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row my-3">
                        <div class="col-md-12">
                            <h5>Website Banner</h5><br>
                        </div>
                       
                        <div class="card" style="width:100%;height:400px;margin-left:30px">
                        <form action="islem/islem.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group" style="margin-left:20px">
                                <label>Banner fotoğrafı:</label><br>
                                <img src="images/slider/<?=$bannercek['site_banner'];?>" style="width:300px;">
                            </div><hr>
                            <div class="form-group" style="margin-left:20px">
                                <label>Fotoğraf Seç(Önerilen Boyutlar: 1320×627)</label><br>
                                <input type="file" name="bannerfoto" class="file-upload">
                            </div>
                            <input type="hidden" name="banner_id" value="<?php echo $bannercek['id']?>">
                            <button type="submit" name="bannerduzenle" class="btn btn-primary mr-2" style="margin-left:20px">Kaydet</button>
                        </form>
                        </div>
                       
                    </div>
                    


                </section>
            </div>
        </div>
    </div>


<?php include "footer.php";?>