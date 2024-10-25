<?php include "header.php";
      include "islem/baglanti.php";
?>
            
           
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row my-3">
                        <div class="col-md-12">
                            <h5>Admin Panel Kullanıcıları</h5>
                        </div>
                        <div class="col-md-6">
                            <a href="kullanici-ekle.php"><button type="submit" class="btn btn-info" style="background-color:#01579B; border-color:#01579B; float:left">Yeni Kullanıcı Ekle</button></a>
                        </div>

                    </div>
                    <table class="table table-hover table-bordered" style="width:1000px">
                        <thead style="background-color:#F3E5F5">
                            <tr>
                                <th>Kullanıcı Adı</th>
                                <th>Kullanıcı Şifre</th>
                                <th>Güncelle</th>
                                <th style="text-align:center;">Sil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $kullanici=$baglanti->prepare("SELECT * FROM kullanici");
                                $kullanici->execute();
                                while ($kullanicicek=$kullanici->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                                
                                <td><?php echo $kullanicicek['kullanici_adi']?></td>
                                <td><?php echo $kullanicicek['sifre']?></td>
                                <td><a href="kullanici-duzenle.php?id=<?php echo $kullanicicek['id'] ?>"><button title="Duzenle" class="btn btn-warning">Düzenle</button></a></td>
                                <td><a href="islem/islem.php?kullanicisil&id=<?php echo $kullanicicek['id'] ?>"><button title="Sil" class="btn btn-danger" onclick="alert('Silmek istiyor musunuz?');">Sil</button></a></td>

                            </tr>
                            <?php } ?>
           
                        </tbody>

                    </table>


                </section>
            </div>
        </div>
    </div>


<?php include "footer.php";?>