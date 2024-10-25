<?php include "header.php";
      include "islem/baglanti.php";
?>
            
            <div class="stretch-card" style="width:1040px">
                <div class="card">
                    <div class="card-body">
                        <div class="row my-3">
                            <div class="col-md-12">
                                 <h5>Resimler</h5><br>
                            </div>
                            <div class="col-md-6">
                                <a href="resim-ekle.php?katid=<?php echo $_GET['katid']?>"><button type="submit" class="btn btn-info" style="background-color:#01579B; border-color:#01579B; float:left">Yeni Resim Ekle</button></a>
                            </div>

                    </div>
                        
                        <div class="table table-hover">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        
                                        <th>Görsel</th>
                                        <th>Durum</th>
                                        <th>Düzenle</th>
                                        <th>Sil</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $resim=$baglanti->prepare("SELECT * FROM portfoy where kategori_id=:kategori_id order by resim_id ASC");
                                        $resim->execute(array(
                                            
                                        'kategori_id'=>$_GET['katid']    
                                            
                                            ));
                                        while ($resimcek=$resim->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <tr>
                                        
                                        <td><img style="width:400px;height:250px" src="images/portföy/<?php echo $resimcek['resim_adi']?>"></td>
                                        <td><?php if($resimcek['resim_durum']=="1"){
                                         echo "Aktif";
                                        }elseif($resimcek['resim_durum']=="0"){
                                        echo "Pasif";
                                        }
                                        ?></td>
                                        <td><a href="resim-duzenle.php?id=<?php echo $resimcek['resim_id'] ?>&katid=<?php echo $resimcek['kategori_id']?>"><button type="button" class="btn btn-warning btn-rounded btn-fw">Düzenle</button></a></td>
                                        <form action="islem/islem.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $resimcek['resim_id']?>">
                                            <input type="hidden" name="resim" value="<?php echo $resimcek['resim_adi']?>">
                                            <input type="hidden" name="katsid" value="<?php echo $_GET['katid']?>">
                                            <td style="text-align:center"><button name="resimsil" type="submit" title="Sil" class="btn btn-danger" onclick="alert('Silmek istiyor musunuz?');">Sil</button></td>
                                        </form>
                                    </tr>
                                  <?php } ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


<?php include "footer.php";?>