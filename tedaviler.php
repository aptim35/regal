<?php include "header.php";
      include "islem/baglanti.php";
?>
            
           
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row my-3">
                        <div class="col-md-12">
                            <h5>Tedavi Seçenekleri Listesi</h5>
                        </div>
                        <div class="col-md-6">
                            <a href="tedavi-ekle.php"><button type="submit" class="btn btn-info" style="background-color:#01579B; border-color:#01579B; float:left">Yeni Tedavi Ekle</button></a>
                        </div>

                    </div>
                    <table class="table table-hover table-bordered" style="width:1000px">
                        <thead style="background-color:#F3E5F5">
                            <tr>
                                <th>Tedavi Görsel</th>
                                <th>Tedavi İsmi</th>
                                <th>Tedavi Giriş</th>
                                <th>Tedavi İçerik</th>
                                <th>Detaylar</th>
                                <th>Güncelle</th>
                                <th style="text-align:center;">Sil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $tedavi=$baglanti->prepare("SELECT * FROM tedaviler");
                                $tedavi->execute();
                                while ($tedavicek=$tedavi->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                                <td><img style="width:200px;height:150px" src="images/tedavi/<?php echo $tedavicek['tedavi_gorsel']?>"></td>
                                <td><?php echo $tedavicek['tedavi_baslik_tr']?></td>
                                <td><?php echo substr($tedavicek['tedavi_giris_tr'],0,35);?>...</td>
                                <td><?php echo substr($tedavicek['tedavi_detay_tr'],0,35);?>...</td>
                                <td><a href="tedavi-detay.php?id=<?php echo $tedavicek['id'] ?>"><button title="Detaylar" class="btn btn-info">Detaylar</button></a></td>
                                <td><a href="tedavi-duzenle.php?id=<?php echo $tedavicek['id'] ?>"><button title="Duzenle" class="btn btn-warning">Düzenle</button></a></td>
                                <td><a href="islem/islem.php?tedavisil&id=<?php echo $tedavicek['id'] ?>"><button title="Sil" class="btn btn-danger" onclick="alert('Silmek istiyor musunuz?');">Sil</button></a></td>

                            </tr>
                            <?php } ?>
           
                        </tbody>

                    </table>


                </section>
            </div>
        </div>
    </div>


<?php include "footer.php";?>