<?php

require_once 'islem/baglanti.php';


if (!empty($_FILES)) {


  
  
  
	$uploads_dir='images/sizdengelen';
	@$tmp_name= $_FILES['file'] ["tmp_name"];
	@$name= $_FILES['file'] ["name"];


	$sayi=rand(1,1000000);
	$sayi2=rand(1,100000);
	$sayi3=rand(10000, 20000000);


	$sayilar=$sayi.$sayi2.$sayi3;
	$resimyolu=$sayilar.$name;

	@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");





		$resimkaydet=$baglanti->prepare("INSERT into sizdengelengorsel SET 



			fotograf_adi=:fotograf_adi,
			sizdengelen_id=:sizdengelen_id
			

			");

		$insert=$resimkaydet->execute(array(
			'fotograf_adi'=>$resimyolu,
			'sizdengelen_id'=>$_POST['sizdengelen_id']



		));




}
 











