<?php include "header.php";
      include "islem/baglanti.php";
?>
            
           
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row my-3">
                        <div class="col-md-12">
                            <h5>Tüp Bebek Sayfası</h5>
                        </div>
                        <div class="col-md-6">
                            <a href="tupbebek-ekle.php"><button type="submit" class="btn btn-info" style="background-color:#01579B; border-color:#01579B; float:left">Yeni Yazı Ekle</button></a>
                        </div>

                    </div>
                   <!-- <input id="myInput" type="text" placeholder="Güncel ara" class="form-control"><br>-->
                    <table class="table table-hover table-bordered" style="width:1000px">
                        <thead style="background-color:#F3E5F5">
                            <tr>
                                
                                <th>Tüp Bebek Başlık</th>
                                <th>Tüp Bebek Detay</th>
                                <th>Detaylar</th>
                                <th>Güncelle</th>
                                <th style="text-align:center;">Sil</th>
                                <th>Resimler</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php 
                                $tupbebek=$baglanti->prepare("SELECT * FROM tupbebek");
                                $tupbebek->execute();
                                while ($tupbebekcek=$tupbebek->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                               
                                <td><?php echo $tupbebekcek['yazi_baslik_tr']?></td>
                                <td><?php echo substr($tupbebekcek['yazi_detay_tr'],0,45);?>...</td>
                                <td><a href="tupbebek-detay.php?id=<?php echo $tupbebekcek['id'] ?>"><button title="Detaylar" class="btn btn-info">Detaylar</button></a></td>
                                <td><a href="tupbebek-duzenle.php?id=<?php echo $tupbebekcek['id'] ?>"><button title="Duzenle" class="btn btn-warning">Düzenle</button></a></td>
                                <td><a href="islem/islem.php?tupbebeksil&id=<?php echo $tupbebekcek['id'] ?>"><button title="Sil" class="btn btn-danger" onclick="alert('Silmek istiyor musunuz?');">Sil</button></a></td>
                                <td><a href="tupbebekresim.php?id=<?php echo $tupbebekcek['id'] ?>"><button title="Resimler" class="btn btn-primary">Resimler</button></a></td>
                            </tr>
                            <?php } ?>
           
                        </tbody>

                    </table>


                </section>
            </div>
        </div>
    </div>


<?php include "footer.php";?>