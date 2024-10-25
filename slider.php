<?php include "header.php";
      include "islem/baglanti.php";
?>
            
            <div class="stretch-card" style="width:1040px">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Slider İçerik Sayfası</h4><br>
                        
                        <div class="table table-hover">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        
                                        <th>Slider Fotoğraf</th>
                                        <th>Video Poster</th>
                                        <th>Slider Video</th>
                                        <th>Slider Üst Başlık</th>
                                        <th>Slider Alt Başlık</th>
                                        <th>Düzenle</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $slider=$baglanti->prepare("SELECT * FROM web_slider");
                                        $slider->execute();
                                        while ($slidercek=$slider->fetch(PDO::FETCH_ASSOC)) { ?>
                                    <tr>
                                        
                                        <td><img style="width:170px;height:120px" src="images/slider/<?php echo $slidercek['slider_foto']?>"></td>
                                        <td><img style="width:170px;height:120px" src="images/slider/<?php echo $slidercek['video_poster']?>"></td>
                                        <td><?php echo $slidercek['video']?></td>
                                        <td><?php echo $slidercek['slider_yazitr']?></td>
                                        <td><?php echo $slidercek['altbasliktr']?></td>
                                        <td><a href="slider-duzenle.php?id=<?php echo $slidercek['id'] ?>"><button type="button" class="btn btn-warning btn-rounded btn-fw">Düzenle</button></a></td>
                                        
                                    </tr>
                                  <?php } ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


<?php include "footer.php";?>