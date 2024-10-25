<?php include "header.php";
      include "islem/baglanti.php";
?>
            
           
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row my-3">
                        <div class="col-md-12">
                            <h5>Sizden Gelenler Sayfası</h5>
                        </div>
                        <div class="col-md-6">
                            <a href="sizdengelen-ekle.php"><button type="submit" class="btn btn-info" style="background-color:#01579B; border-color:#01579B; float:left">Yeni Ekle + </button></a>
                        </div>

                    </div>
                   <!-- <input id="myInput" type="text" placeholder="Güncel ara" class="form-control"><br>-->
                    <table class="table table-hover table-bordered" style="width:1000px">
                        <thead style="background-color:#F3E5F5">
                            <tr>
                                
                                <th>İsim Soyisim</th>
                                <th>Açıklama</th>
                                <!--<th>Detaylar</th>-->
                                <th>Güncelle</th>
                                <th style="text-align:center;">Sil</th>
                                <th>Resimler</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php 
                                $referans=$baglanti->prepare("SELECT * FROM sizdengelen");
                                $referans->execute();
                                while ($referansbilgi=$referans->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                               
                                <td><?php echo $referansbilgi['isim']?></td>
                                <td><?php echo substr($referansbilgi['aciklama_tr'],0,25);?>...</td>
                                <!--<td><a href="sizdengelen-detay.php?id=<?php echo $referansbilgi['id'] ?>"><button title="Detaylar" class="btn btn-info">Detaylar</button></a></td>-->
                                <td><a href="sizdengelen-duzenle.php?id=<?php echo $referansbilgi['id'] ?>"><button title="Duzenle" class="btn btn-warning">Düzenle</button></a></td>
                                <td><a href="islem/islem.php?sizdengelensil&id=<?php echo $referansbilgi['id'] ?>"><button title="Sil" class="btn btn-danger" onclick="alert('Silmek istiyor musunuz?');">Sil</button></a></td>
                                <td><a href="sizdengelenresim.php?id=<?php echo $referansbilgi['id'] ?>"><button title="Resimler" class="btn btn-primary">Resimler</button></a></td>
                            </tr>
                            <?php } ?>
           
                        </tbody>

                    </table>


                </section>
            </div>
        </div>
    </div>


<?php include "footer.php";?>