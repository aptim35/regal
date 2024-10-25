<?php include "header.php";
      include "islem/baglanti.php";
?>
            
           
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row my-3">
                        <div class="col-md-12">
                            <h5>Güncel Listesi</h5>
                        </div>
                        <div class="col-md-6">
                            <a href="blog-ekle.php"><button type="submit" class="btn btn-info" style="background-color:#01579B; border-color:#01579B; float:left">Yeni Güncel Yazı Ekle</button></a>
                        </div>

                    </div>
                   <!-- <input id="myInput" type="text" placeholder="Güncel ara" class="form-control"><br>-->
                    <table class="table table-hover table-bordered" style="width:1000px">
                        <thead style="background-color:#F3E5F5">
                            <tr>
                                <th>Güncel Görsel</th>
                                <th>Güncel Başlık</th>
                                <th>Yazar</th>
                                <th>Eklenme Tarihi</th>
                                <th>Detaylar</th>
                                <th>Güncelle</th>
                                <th style="text-align:center;">Sil</th>
                                <th>Resimler</th>
                            </tr>
                        </thead>
                        <tbody id="myTable">
                            <?php 
                                $blog=$baglanti->prepare("SELECT * FROM blog");
                                $blog->execute();
                                while ($blogcek=$blog->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                                <td><img style="width:220px;height:auto" src="images/blog/<?php echo $blogcek['blog_foto']?>"></td>
                                <td><?php echo $blogcek['blog_baslik_tr']?></td>
                                <td><?php echo $blogcek['yazar']?></td>
                                <td><?php echo $blogcek['eklenme_zamani']?></td>
                                <td><a href="blog-detay.php?id=<?php echo $blogcek['id'] ?>"><button title="Detaylar" class="btn btn-info">Detaylar</button></a></td>
                                <td><a href="blog-duzenle.php?id=<?php echo $blogcek['id'] ?>"><button title="Duzenle" class="btn btn-warning">Düzenle</button></a></td>
                                <td><a href="islem/islem.php?blogsil&id=<?php echo $blogcek['id'] ?>"><button title="Sil" class="btn btn-danger" onclick="alert('Silmek istiyor musunuz?');">Sil</button></a></td>
                                <td><a href="blogresim.php?id=<?php echo $blogcek['id'] ?>"><button title="Resimler" class="btn btn-primary">Resimler</button></a></td>
                            </tr>
                            <?php } ?>
           
                        </tbody>

                    </table>


                </section>
            </div>
        </div>
    </div>


<?php include "footer.php";?>