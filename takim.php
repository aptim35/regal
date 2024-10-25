<?php include "header.php";
      include "islem/baglanti.php";
?>
    <div class="row">
        <div class="col-md-12">
           <a href="takim-ekle.php"><button class="btn btn-info" style="background:#01579B;border-color:#01579B;margin-left:10px;margin-top:5px">Yeni ekle + </button></a> 
        </div>
        <?php 
        $takim=$baglanti->prepare("SELECT * FROM takim");
        $takim->execute();
        while ($takimcek=$takim->fetch(PDO::FETCH_ASSOC)) { ?>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;height:23rem;margin-left:10px;margin-top:10px">
                <img src="images/takim/<?php echo $takimcek['fotograf']?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $takimcek['isim_soyisim']?></h5>
                    <p class="card-text"><?php echo $takimcek['unvan_tr']?></p>
                    <a href="takim-detay.php?id=<?php echo $takimcek['id'] ?>"><button class="btn btn-info">Detaylar</button></a>
                    <a href="takim-duzenle.php?id=<?php echo $takimcek['id'] ?>"><button class="btn btn-warning">Düzenle</button></a>
                    <a href="islem/islem.php?takimsil&id=<?php echo $takimcek['id'] ?>"><button class="btn btn-danger" onclick="alert('Silmek istiyor musunuz?');">Sil</button></a>
                </div>
            </div>
        </div>
         <?php } ?>
    </div>
        


<?php include "footer.php";?>