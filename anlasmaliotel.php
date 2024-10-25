<?php include "header.php";
      include "islem/baglanti.php";
?>
            
           
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row my-3">
                        <div class="col-md-12">
                            <h5>Anlaşmalı Oteller</h5>
                        </div>
                        <div class="col-md-6">
                            <a href="otel-ekle.php"><button type="submit" class="btn btn-info" style="background-color:#01579B; border-color:#01579B; float:left">Yeni Otel Ekle</button></a>
                        </div>
                        <div class="col-md-6">
                            <a href="otel_girismetni.php"><button type="submit" class="btn btn-warning" style="float:right">Anlaşmalı Oteller Sayfası Giriş Metni</button></a>
                        </div>

                    </div>
                   <!-- <input id="myInput" type="text" placeholder="Güncel ara" class="form-control"><br>-->
                    <table class="table table-hover table-bordered" style="width:1000px">
                        <thead style="background-color:#F3E5F5">
                            <tr>
                                
                                <th>Logo</th>
                                <th>İsim</th>
                                <th>Açıklama</th>
                                <th>Link</th>
                                <th>Güncelle</th>
                                <th style="text-align:center;">Sil</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php 
                                $otel=$baglanti->prepare("SELECT * FROM anlasmalioteller");
                                $otel->execute();
                                while ($otelcek=$otel->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                                <td><img style="width:120px;height:auto" src="images/otel/<?php echo $otelcek['otel_logo']?>"></td>
                                <td><?php echo $otelcek['otel_isim_tr']?></td>
                                <td><?php echo substr($otelcek['otel_aciklama_tr'],0,25);?>...</td>
                                <td><?php echo $otelcek['otel_link']?></td>
                                <td><a href="otel-duzenle.php?id=<?php echo $otelcek['id'] ?>"><button title="Duzenle" class="btn btn-warning">Düzenle</button></a></td>
                                <td><a href="islem/islem.php?otelsil&id=<?php echo $otelcek['id'] ?>"><button title="Sil" class="btn btn-danger" onclick="alert('Silmek istiyor musunuz?');">Sil</button></a></td>
                                
                            </tr>
                            <?php } ?>
           
                        </tbody>

                    </table>


                </section>
            </div>
        </div>
    </div>


<?php include "footer.php";?>