<?php include "header.php";
      include "islem/baglanti.php";
?>
            
           
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row my-3">
                        <div class="col-md-12">
                            <h5>Portföy Kategori Listesi</h5><br>
                        </div>
                        <div class="col-md-6">
                            <a href="kategori-ekle.php"><button type="submit" class="btn btn-info" style="background-color:#01579B; border-color:#01579B; float:left">Yeni Kategori Ekle</button></a>
                        </div>

                    </div>
                    <table class="table table-hover table-bordered" style="width:1000px">
                        <thead style="background-color:#F3E5F5">
                            <tr>
                               
                                <th>Portföy Kategori Adı</th>
                                <th>Kategori Durum</th>
                                <th style="text-align:center">Kategori Güncelle</th>
                                <th style="text-align:center;">Kategori Sil</th>
                                <th style="text-align:center">Resimler</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $portföy=$baglanti->prepare("SELECT * FROM portfoykategori order by kategori_id ASC");
                                $portföy->execute();
                                while ($portföycek=$portföy->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                                
                                <td><?php echo $portföycek['kategori_adi']?></td>
                                <td><?php if($portföycek['kategori_durum']=="1"){
                                        echo "Aktif";
                                }elseif($portföycek['kategori_durum']=="0"){
                                        echo "Pasif";
                                }
                                ?></td>
                                <td style="text-align:center"><a href="kategori-duzenle.php?id=<?php echo $portföycek['kategori_id'] ?>"><button title="Duzenle" class="btn btn-warning">Düzenle</button></a></td>
                                <td style="text-align:center"><a href="islem/islem.php?kategorisil&id=<?php echo $portföycek['kategori_id'] ?>"><button type="submit" title="Sil" class="btn btn-danger" onclick="alert('Silmek istiyor musunuz?');">Sil</button></a></td>
                                <td style="text-align:center"><a href="resimler.php?katid=<?php echo $portföycek['kategori_id'] ?>"><button title="Düzenle" class="btn btn-info" >Resimleri Gör</button></a></td>
                            </tr>
                            <?php } ?>
           
                        </tbody>

                    </table>


                </section>
            </div>
        </div>
    </div>


<?php include "footer.php";?>