<?php include "header.php";
      include "islem/baglanti.php";
?>
            
           
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row my-3">
                        <div class="col-md-12">
                            <h5>Sık Sorulanlar Listesi</h5>
                        </div>
                        <div class="col-md-6">
                            <a href="faq-ekle.php"><button type="submit" class="btn btn-info" style="background-color:#01579B; border-color:#01579B; float:left">Yeni Soru Ekle</button></a>
                        </div>

                    </div>
                    <table class="table table-hover table-bordered" style="width:1000px">
                        <thead style="background-color:#F3E5F5">
                            <tr>
                
                                <th>Soru (TR)</th>
                                <th>Cevap (TR)</th>
                                <th>Detaylar</th>
                                <th>Güncelle</th>
                                <th style="text-align:center;">Sil</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $soru=$baglanti->prepare("SELECT * FROM faq");
                                $soru->execute();
                                while ($sorucek=$soru->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                                
                                <td><?php echo substr($sorucek['soru_tr'],0,45);?>...</td>
                                <td><?php echo substr($sorucek['cevap_tr'],0,45);?>...</td>
                                <td><a href="faq-detay.php?id=<?php echo $sorucek['id'] ?>"><button title="Detaylar" class="btn btn-info">Detaylar</button></a></td>
                                <td><a href="faq-duzenle.php?id=<?php echo $sorucek['id'] ?>"><button title="Duzenle" class="btn btn-warning">Düzenle</button></a></td>
                                <td><a href="islem/islem.php?sorusil&id=<?php echo $sorucek['id'] ?>"><button title="Sil" class="btn btn-danger" onclick="alert('Silmek istiyor musunuz?');">Sil</button></a></td>

                            </tr>
                            <?php } ?>
           
                        </tbody>

                    </table>


                </section>
            </div>
        </div>
    </div>


<?php include "footer.php";?>