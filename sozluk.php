<?php include "header.php";
      include "islem/baglanti.php";
?>
            
           
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row my-3">
                        <div class="col-md-12">
                            <h5>Tüp Bebek Sözlük</h5>
                        </div>
                        <div class="col-md-6">
                            <a href="sozlukterim-ekle.php"><button type="submit" class="btn btn-info" style="background-color:#01579B; border-color:#01579B; float:left">Yeni Ekle + </button></a>
                        </div>

                    </div>
                  
                    <table class="table table-hover table-bordered" style="width:1000px">
                        <thead style="background-color:#F3E5F5">
                            <tr>
                                
                                <th>Terim</th>
                                <th>Açıklama</th>
                                <th style="text-align:center;">Güncelle</th>
                                <th style="text-align:center;">Sil</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $terim=$baglanti->prepare("SELECT * FROM tupbebeksozluk");
                                $terim->execute();
                                while ($terimcek=$terim->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                               
                                <td><?php echo $terimcek['terim_tr']?></td>
                                <td><?php echo substr($terimcek['aciklama_tr'],0,15);?>...</td>
                                <td style="text-align:center"><a href="sozluk-duzenle.php?id=<?php echo $terimcek['id'] ?>"><button title="Duzenle" class="btn btn-warning">Düzenle</button></a></td>
                                <td style="text-align:center"><a href="islem/islem.php?sozluksil&id=<?php echo $terimcek['id'] ?>"><button title="Sil" class="btn btn-danger" onclick="alert('Silmek istiyor musunuz?');">Sil</button></a></td>
                                
                            </tr>
                            <?php } ?>
           
                        </tbody>

                    </table>


                </section>
            </div>
        </div>
    </div>


<?php include "footer.php";?>