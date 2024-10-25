<?php include "header.php";
      include "islem/baglanti.php";
?>
            
           
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <section id="main-content">
                    <div class="row my-3">
                        <div class="col-md-12">
                            <h5>Sizden Gelen Resim</h5>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <form action="referansresimyukle.php" method="POST" enctype="multipart/form-data" class="dropzone">
                                <input type="hidden" name="sizdengelen_id" value="<?php echo $_GET['id'] ?>">
                            </form>
                        </div>
                        
                    </div>
                    <table class="table table-hover table-bordered" style="width:1000px">
                        <thead style="background-color:#F3E5F5">
                            <tr>
                                
                                <th>Resim</th>
                                <th style="text-align:center;">Sil</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $resim=$baglanti->prepare("SELECT * FROM sizdengelengorsel where sizdengelen_id=:sizdengelen_id");
                                $resim->execute(array(
                                        
                                'sizdengelen_id'=>$_GET['id']
                                        
                                ));
                                while ($resimcek=$resim->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                               
                                <td><img style="width:350px;height:200px" src="images/sizdengelen/<?php echo $resimcek['fotograf_adi'] ?>"></td>
                               
                                <form action="islem/islem.php" method="post">
                                    <input type="hidden" name="resimid" value="<?php echo $_GET['id'] ?>">
                                    <input type="hidden" name="id" value="<?php echo $resimcek['id'] ?>">
                                    <input type="hidden" name="image" value="<?php echo $resimcek['fotograf_adi'] ?>">
                                    <td style="text-align:center"><button name="referansresimsil" type="submit" class="btn btn-danger" onclick="alert('Silmek istiyor musunuz?');">Sil</button></td>

                                </form>
                                
                            </tr>
                            <?php } ?>
           
                        </tbody>

                    </table>

                </section>
            </div>
        </div>
    </div>


<?php include "footer.php";?>