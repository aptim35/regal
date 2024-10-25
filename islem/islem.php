<?php

require_once 'baglanti.php';
session_start();

/*****kullanıcı giriş*******/
if (isset($_POST['girisyap'])) {

$kadi=htmlspecialchars($_POST['kadi']);
$sifre=htmlspecialchars($_POST['sifre']);
$sifreguclu=md5($sifre);


$kullanicisor=$baglanti->prepare("SELECT * from kullanici where kullanici_adi=:kullanici_adi and sifre=:sifre");
$kullanicisor->execute(array(

'kullanici_adi'=>$kadi,
'sifre'=>$sifreguclu

	));

$var=$kullanicisor->rowCount();

if($var>0){
	$_SESSION['girisbelgesi']=$kadi;
	Header("Location:../index.php?durum=hosgeldin");
}
else{
	Header("Location:../giris.php?durum=hata");
	}

}

/**************menü logo güncelle****************/

if (isset($_POST['logoduzenle'])) {


$uploads_dir='../images/logo';
$tmp_name=$_FILES['logo'] ["tmp_name"];
$name=$_FILES['logo'] ["name"];

$sayi=rand(1,1000000);
$sayi2=rand(1,100000);

$sayilar=$sayi.$sayi2;
$resimyolu=$sayilar.$name;

@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
$duzenle=$baglanti->prepare("UPDATE sitebilgileri SET

		logo=:logo
		
		");

	$update=$duzenle->execute(array(

	
		'logo'=>$resimyolu

	));
	if($update) {
	
	header("Location:../logo.php?durum=basarili");
	}
	else{
	header("Location:../logo-duzenle.php?durum=basarisiz");
	}

  }
  
  
 
/**************favicon güncelle****************/

if (isset($_POST['faviconduzenle'])) {


$uploads_dir='../images/logo';
$tmp_name=$_FILES['favicon'] ["tmp_name"];
$name=$_FILES['favicon'] ["name"];

$sayi=rand(1,1000000);
$sayi2=rand(1,100000);

$sayilar=$sayi.$sayi2;
$resimyolu=$sayilar.$name;

@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
$duzenle=$baglanti->prepare("UPDATE sitebilgileri SET

	
		favicon=:favicon
		
		");

	$update=$duzenle->execute(array(

	
		'favicon'=>$resimyolu
		
	

	));
	if($update) {
	
	header("Location:../logo.php?durum=basarili");
	}
	else{
	header("Location:../logo-duzenle.php?durum=basarisiz");
	}

  }
  
 /**************footer logo güncelle****************/

if (isset($_POST['footerlogoduzenle'])) {


$uploads_dir='../images/logo';
$tmp_name=$_FILES['footerlogo'] ["tmp_name"];
$name=$_FILES['footerlogo'] ["name"];

$sayi=rand(1,1000000);
$sayi2=rand(1,100000);

$sayilar=$sayi.$sayi2;
$resimyolu=$sayilar.$name;

@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
$duzenle=$baglanti->prepare("UPDATE sitebilgileri SET

	
		footer_logo=:footer_logo
		
		");

	$update=$duzenle->execute(array(

	
		'footer_logo'=>$resimyolu
		
	

	));
	if($update) {
	
	header("Location:../logo.php?durum=basarili");
	}
	else{
	header("Location:../logo-duzenle.php?durum=basarisiz");
	}

  }
  

/**************randevu alanı görsel güncelle****************/

if (isset($_POST['randevugorselduzenle'])) {


$uploads_dir='../images';
$tmp_name=$_FILES['randevufoto'] ["tmp_name"];
$name=$_FILES['randevufoto'] ["name"];

$sayi=rand(1,1000000);
$sayi2=rand(1,100000);

$sayilar=$sayi.$sayi2;
$resimyolu=$sayilar.$name;

@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
$duzenle=$baglanti->prepare("UPDATE sitebilgileri SET

	
		randevu_gorsel=:randevu_gorsel
		
		");

	$update=$duzenle->execute(array(

	
		'randevu_gorsel'=>$resimyolu
		
	

	));
	if($update) {
	
	header("Location:../randevu.php?durum=basarili");
	}
	else{
	header("Location:../randevu.php?durum=basarisiz");
	}

  }


/*************hakkımızda düzenleme***************/

if (isset($_POST['hakkimizdaduzenle'])) {

$about=$_POST['about_id'];	

$duzenle=$baglanti->prepare("UPDATE hakkimizda SET

		hakkimizda_baslik=:hakkimizda_baslik,
		hakkimizda_basliken=:hakkimizda_basliken,
		hakkimizda_baslikru=:hakkimizda_baslikru,
		hakkimizda_baslikar=:hakkimizda_baslikar,
		hakkimizda_baslikde=:hakkimizda_baslikde,
		hakkimizda_icerik=:hakkimizda_icerik,
		hakkimizda_iceriken=:hakkimizda_iceriken,
		hakkimizda_icerikru=:hakkimizda_icerikru,
		hakkimizda_icerikar=:hakkimizda_icerikar,
		hakkimizda_icerikde=:hakkimizda_icerikde

	WHERE id=$about

		");

	$update=$duzenle->execute(array(

		
		'hakkimizda_baslik'=>$_POST['basliktr'],
		'hakkimizda_basliken'=>$_POST['basliken'],
		'hakkimizda_baslikru'=>$_POST['baslikru'],
		'hakkimizda_baslikar'=>$_POST['baslikar'],
		'hakkimizda_baslikde'=>$_POST['baslikde'],
		'hakkimizda_icerik'=>$_POST['iceriktr'],
		'hakkimizda_iceriken'=>$_POST['iceriken'],
		'hakkimizda_icerikru'=>$_POST['icerikru'],
		'hakkimizda_icerikar'=>$_POST['icerikar'],
		'hakkimizda_icerikde'=>$_POST['icerikde']
		
	));
	if($update) {
	
	header("Location:../hakkimizda.php?durum=basarili");
	}
	else{
	header("Location:../hakkimizda-duzenle.php?durum=basarisiz");
	}

}

/*********slider düzenleme*******/

if (isset($_POST['sliderduzenle'])) {

$slide=$_POST['slider_id'];	

if ($_FILES['sliderfoto']   ["size"]>0) {
$uploads_dir='../images/slider';
$tmp_name=$_FILES['sliderfoto'] ["tmp_name"];
$name=$_FILES['sliderfoto'] ["name"];

$sayi=rand(1,1000);
$sayi2=rand(1,100);

$sayilar=$sayi.$sayi2;
$resimyolu=$sayilar.$name;

@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
$duzenle=$baglanti->prepare("UPDATE web_slider SET

		slider_yazitr=:slider_yazitr,
		slider_yazien=:slider_yazien,
		slider_yaziru=:slider_yaziru,
		slider_yaziar=:slider_yaziar,
		slider_yazide=:slider_yazide,
		altbasliktr=:altbasliktr,
		altbasliken=:altbasliken,
		altbaslikru=:altbaslikru,
		altbaslikar=:altbaslikar,
		altbaslikde=:altbaslikde,
		slider_foto=:slider_foto
		

	WHERE id=$slide

		");

	$update=$duzenle->execute(array(

	
		'slider_yazitr'=>$_POST['aciklamatr'],
		'slider_yazien'=>$_POST['aciklamaen'],
		'slider_yaziru'=>$_POST['aciklamaru'],
		'slider_yaziar'=>$_POST['aciklamaar'],
		'slider_yazide'=>$_POST['aciklamade'],
		'altbasliktr'=>$_POST['altbasliktr'],
		'altbasliken'=>$_POST['altbasliken'],
		'altbaslikru'=>$_POST['altbaslikru'],
		'altbaslikar'=>$_POST['altbaslikar'],
		'altbaslikde'=>$_POST['altbaslikde'],
		'slider_foto'=>$resimyolu
		
	

	));
	if($update) {
	
	header("Location:../slider.php?durum=basarili");
	}
	else{
	header("Location:../slider-duzenle.php?durum=basarisiz");
	}

  }
  else{
      $duzenle=$baglanti->prepare("UPDATE web_slider SET

		slider_yazitr=:slider_yazitr,
		slider_yazien=:slider_yazien,
		slider_yaziru=:slider_yaziru,
		slider_yaziar=:slider_yaziar,
		slider_yazide=:slider_yazide,
		altbasliktr=:altbasliktr,
		altbasliken=:altbasliken,
		altbaslikru=:altbaslikru,
		altbaslikar=:altbaslikar,
		altbaslikde=:altbaslikde
		

	WHERE id=$slide

		");

	$update=$duzenle->execute(array(

		'slider_yazitr'=>$_POST['aciklamatr'],
		'slider_yazien'=>$_POST['aciklamaen'],
		'slider_yaziru'=>$_POST['aciklamaru'],
		'slider_yaziar'=>$_POST['aciklamaar'],
		'slider_yazide'=>$_POST['aciklamade'],
		'altbasliktr'=>$_POST['altbasliktr'],
		'altbasliken'=>$_POST['altbasliken'],
		'altbaslikru'=>$_POST['altbaslikru'],
		'altbaslikar'=>$_POST['altbaslikar'],
		'altbaslikde'=>$_POST['altbaslikde']

	));
	if($update) {
	
	header("Location:../slider.php?durum=basarili");
	}
	else{
	header("Location:../slider-duzenle.php?durum=basarisiz");
	}
  }
}

/**************video poster güncelle****************/

if (isset($_POST['posterduzenle'])) {

$poster=$_POST['poster_id'];	

$uploads_dir='../images/slider';
$tmp_name=$_FILES['videoposter'] ["tmp_name"];
$name=$_FILES['videoposter'] ["name"];

$sayi=rand(1,1000000);
$sayi2=rand(1,100000);

$sayilar=$sayi.$sayi2;
$resimyolu=$sayilar.$name;

@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
$duzenle=$baglanti->prepare("UPDATE web_slider SET

	
		video_poster=:video_poster
		
		WHERE id=$poster
		
		");

	$update=$duzenle->execute(array(

	
		'video_poster'=>$resimyolu
		
	

	));
	if($update) {
	
	header("Location:../slider.php?durum=basarili");
	}
	else{
	header("Location:../slider-duzenle.php?durum=basarisiz");
	}

}

/**************slider video güncelle****************/

if (isset($_POST['videoduzenle'])) {

$video=$_POST['video_id'];	

$uploads_dir='../images/slider';
$tmp_name=$_FILES['slidervideo'] ["tmp_name"];
$name=$_FILES['slidervideo'] ["name"];

$sayi=rand(1,1000000);
$sayi2=rand(1,100000);

$sayilar=$sayi.$sayi2;
$resimyolu=$sayilar.$name;

@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
$duzenle=$baglanti->prepare("UPDATE web_slider SET

	
		video=:video
		
		WHERE id=$video
		
		");

	$update=$duzenle->execute(array(

	
		'video'=>$resimyolu
		
	

	));
	if($update) {
	
	header("Location:../slider.php?durum=basarili");
	}
	else{
	header("Location:../slider-duzenle.php?durum=basarisiz");
	}

}
  


/**************banner güncelle****************/

if (isset($_POST['bannerduzenle'])) {


$uploads_dir='../images/slider';
$tmp_name=$_FILES['bannerfoto'] ["tmp_name"];
$name=$_FILES['bannerfoto'] ["name"];

$sayi=rand(1,1000000);
$sayi2=rand(1,100000);

$sayilar=$sayi.$sayi2;
$resimyolu=$sayilar.$name;

@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
$duzenle=$baglanti->prepare("UPDATE web_slider SET

	
		site_banner=:site_banner
		
		");

	$update=$duzenle->execute(array(

	
		'site_banner'=>$resimyolu
		
	

	));
	if($update) {
	
	header("Location:../banner.php?durum=basarili");
	}
	else{
	header("Location:../banner.php?durum=basarisiz");
	}

  }


/**********iletişim düzenleme****************/


if (isset($_POST['iletisimduzenle'])) {

$contact=$_POST['iletisim_id'];	

$duzenle=$baglanti->prepare("UPDATE sitebilgileri SET

		adres=:adres,
		adresen=:adresen,
		adresru=:adresru,
		adresar=:adresar,
		adresde=:adresde,
		mail=:mail,
		mail2=:mail2,
		telefon1=:telefon1,
		telefon2=:telefon2,
		telefon3=:telefon3,
		telefon4=:telefon4,
		facebook=:facebook,
		instagram=:instagram,
		twitter=:twitter,
		linkedin=:linkedin
		

	WHERE id=$contact

		");

	$update=$duzenle->execute(array(


		'adres'=>$_POST['adres'],
		'adresen'=>$_POST['adresen'],
		'adresru'=>$_POST['adresru'],
		'adresar'=>$_POST['adresar'],
		'adresde'=>$_POST['adresde'],
		'mail'=>$_POST['mail'],
		'mail2'=>$_POST['mail2'],
		'telefon1'=>$_POST['telefon'],
		'telefon2'=>$_POST['telefon2'],
		'telefon3'=>$_POST['telefon3'],
		'telefon4'=>$_POST['telefon4'],
		'facebook'=>$_POST['facebook'],
		'instagram'=>$_POST['instagram'],
		'twitter'=>$_POST['twitter'],
		'linkedin'=>$_POST['linkedin']

	));
	if($update) {
	
	header("Location:../iletisim.php?durum=basarili");
	}
	else{
	header("Location:../iletisim-duzenle.php?durum=basarisiz");
	}

}

/***********kullanıcı ekleme*********/

if (isset($_POST['kullaniciekle'])) {
 
$kadi=htmlspecialchars($_POST['kadi']);
$sifre=htmlspecialchars($_POST['sifre']);
$sifreguclu=md5($sifre);  

	$kullanicikaydet=$baglanti->prepare("INSERT into kullanici SET

		kullanici_adi=:kullanici_adi,
		sifre=:sifre

		");
	
	$insert=$kullanicikaydet->execute(array(

		'kullanici_adi'=>$kadi,
        'sifre'=>$sifreguclu

	));

	if ($insert) {
	Header("Location:../kullanici.php?durum=basarili");
	}
	else{
	Header("Location:../kullanici-ekle.php?durum=hata");
	}


}


/****************kullanıcı düzenle***********/
if (isset($_POST['kullaniciduzenle'])) {

$kullanici=$_POST['kullanici_id'];	
$kadi=htmlspecialchars($_POST['kadi']);
$sifre=htmlspecialchars($_POST['sifre']);
$sifreguclu=md5($sifre);  

$duzenle=$baglanti->prepare("UPDATE kullanici SET

	kullanici_adi=:kullanici_adi,
	sifre=:sifre
		
		

	WHERE id=$kullanici

		");

	$update=$duzenle->execute(array(


	'kullanici_adi'=>$kadi,
    'sifre'=>$sifreguclu
		
		
	

	));
	if($update) {
	
	header("Location:../kullanici.php?durum=basarili");
	}
	else{
	header("Location:../kullanici-duzenle.php?durum=basarisiz");
	}

}

/************kullanıcı silme*****************/


if (isset($_GET['kullanicisil'])) {

$kullanicisil=$baglanti->prepare("DELETE from kullanici where id=:id");

$kullanicisil->execute(array(

'id'=>$_GET['id']


	));
if ($kullanicisil) {
	Header("Location:../kullanici.php?durum=basarili");
}
else{
	Header("Location:../kullanici.php?durum=hata");
	}
}










/***********takım arkadaşı ekleme sayfası*********/

if (isset($_POST['takimkaydet'])) {
    
    
    $uploads_dir='../images/takim';
    $tmp_name=$_FILES['kisifoto'] ["tmp_name"];
    $name=$_FILES['kisifoto'] ["name"];
    
    $sayi=rand(1,1000);
    $sayi2=rand(1,100);
    
    $sayilar=$sayi.$sayi2;
    $resimyolu=$sayilar.$name;

    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

	$takimkaydet=$baglanti->prepare("INSERT into takim SET

		isim_soyisim=:isim_soyisim,
		unvan_tr=:unvan_tr,
		unvan_en=:unvan_en,
		unvan_ru=:unvan_ru,
		unvan_ar=:unvan_ar,
		unvan_de=:unvan_de,
		bio_tr=:bio_tr,
		bio_en=:bio_en,
		bio_ru=:bio_ru,
		bio_ar=:bio_ar,
		bio_de=:bio_de,
		facebook=:facebook,
		twitter=:twitter,
		instagram=:instagram,
		linkedin=:linkedin,
		fotograf=:fotograf

		");
	
	$insert=$takimkaydet->execute(array(

		'isim_soyisim'=>$_POST['isim'],
		'unvan_tr'=>$_POST['unvantr'],
		'unvan_en'=>$_POST['unvanen'],
		'unvan_ru'=>$_POST['unvanru'],
		'unvan_ar'=>$_POST['unvanar'],
		'unvan_de'=>$_POST['unvande'],
		'bio_tr'=>$_POST['biotr'],
		'bio_en'=>$_POST['bioen'],
		'bio_ru'=>$_POST['bioru'],
		'bio_ar'=>$_POST['bioar'],
		'bio_de'=>$_POST['biode'],
		'facebook'=>$_POST['facebook'],
		'twitter'=>$_POST['twitter'],
		'linkedin'=>$_POST['linkedin'],
		'instagram'=>$_POST['instagram'],
        'fotograf'=>$resimyolu

	));

	if ($insert) {
	Header("Location:../takim.php?durum=basarili");
	}
	else{
	Header("Location:../takim-ekle.php?durum=hata");
	}


}





/*********takım bilgi düzenleme************/

if (isset($_POST['takimduzenle'])) {

$takim=$_POST['takim_id'];	

if ($_FILES['takimfoto']   ["size"]>0) {
$uploads_dir='../images/takim';
$tmp_name=$_FILES['takimfoto'] ["tmp_name"];
$name=$_FILES['takimfoto'] ["name"];

$sayi=rand(1,1000);
$sayi2=rand(1,100);

$sayilar=$sayi.$sayi2;
$resimyolu=$sayilar.$name;

@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
$duzenle=$baglanti->prepare("UPDATE takim SET

		isim_soyisim=:isim_soyisim,
		unvan_tr=:unvan_tr,
		unvan_en=:unvan_en,
		unvan_ru=:unvan_ru,
		unvan_ar=:unvan_ar,
		unvan_de=:unvan_de,
		bio_tr=:bio_tr,
		bio_en=:bio_en,
		bio_ru=:bio_ru,
		bio_ar=:bio_ar,
		bio_de=:bio_de,
		facebook=:facebook,
		twitter=:twitter,
		instagram=:instagram,
		linkedin=:linkedin,
		fotograf=:fotograf
		

	WHERE id=$takim

		");

	$update=$duzenle->execute(array(

		'isim_soyisim'=>$_POST['isim'],
		'unvan_tr'=>$_POST['unvantr'],
		'unvan_en'=>$_POST['unvanen'],
		'unvan_ru'=>$_POST['unvanru'],
		'unvan_ar'=>$_POST['unvanar'],
		'unvan_de'=>$_POST['unvande'],
		'bio_tr'=>$_POST['biotr'],
		'bio_en'=>$_POST['bioen'],
		'bio_ru'=>$_POST['bioru'],
		'bio_ar'=>$_POST['bioar'],
		'bio_de'=>$_POST['biode'],
		'facebook'=>$_POST['facebook'],
		'twitter'=>$_POST['twitter'],
		'instagram'=>$_POST['instagram'],
		'linkedin'=>$_POST['linkedin'],
		'fotograf'=>$resimyolu

	));
	if($update) {
	
	header("Location:../takim.php?durum=basarili");
	}
	else{
	header("Location:../takim-duzenle.php?durum=basarisiz");
	}

  }
  else{
      $duzenle=$baglanti->prepare("UPDATE takim SET

		isim_soyisim=:isim_soyisim,
		unvan_tr=:unvan_tr,
		unvan_en=:unvan_en,
		unvan_ru=:unvan_ru,
		unvan_ar=:unvan_ar,
		unvan_de=:unvan_de,
		bio_tr=:bio_tr,
		bio_en=:bio_en,
		bio_ru=:bio_ru,
		bio_ar=:bio_ar,
		bio_de=:bio_de,
		facebook=:facebook,
		twitter=:twitter,
		instagram=:instagram,
		linkedin=:linkedin
	    

	WHERE id=$takim

		");

	$update=$duzenle->execute(array(

		
	    'isim_soyisim'=>$_POST['isim'],
		'unvan_tr'=>$_POST['unvantr'],
		'unvan_en'=>$_POST['unvanen'],
		'unvan_ru'=>$_POST['unvanru'],
		'unvan_ar'=>$_POST['unvanar'],
		'unvan_de'=>$_POST['unvande'],
		'bio_tr'=>$_POST['biotr'],
		'bio_en'=>$_POST['bioen'],
		'bio_ru'=>$_POST['bioru'],
		'bio_ar'=>$_POST['bioar'],
		'bio_de'=>$_POST['biode'],
		'facebook'=>$_POST['facebook'],
		'twitter'=>$_POST['twitter'],
		'instagram'=>$_POST['instagram'],
		'linkedin'=>$_POST['linkedin']
		

	));
	if($update) {
	
	header("Location:../takim.php?durum=basarili");
	}
	else{
	header("Location:../takim-duzenle.php?durum=basarisiz");
	}
  }
}

/**************imza güncelle****************/

if (isset($_POST['imzaduzenle'])) {


$uploads_dir='../images/takim';
$tmp_name=$_FILES['imzafoto'] ["tmp_name"];
$name=$_FILES['imzafoto'] ["name"];

$sayi=rand(1,1000000);
$sayi2=rand(1,100000);

$sayilar=$sayi.$sayi2;
$resimyolu=$sayilar.$name;

@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
$duzenle=$baglanti->prepare("UPDATE cahitcenksoy SET

		imza_foto=:imza_foto
		
		");

	$update=$duzenle->execute(array(

	
		'imza_foto'=>$resimyolu

	));
	if($update) {
	
	header("Location:../cahitcenksoy.php?durum=basarili");
	}
	else{
	header("Location:../cahitcenksoy-duzenle.php?durum=basarisiz");
	}

  }

/******takım silme************/

if (isset($_GET['takimsil'])) {

$takimsil=$baglanti->prepare("DELETE from takim where id=:id");

$takimsil->execute(array(

'id'=>$_GET['id']


	));
if ($takimsil) {
	Header("Location:../takim.php?durum=basarili");
}
else{
	Header("Location:../takim.php?durum=hata");
	}
}


/*********cahit cenksoy alanı bilgi düzenleme************/

if (isset($_POST['cahitcenksoyduzenle'])) {

$bio=$_POST['bio_id'];	

if ($_FILES['biofoto']   ["size"]>0) {
$uploads_dir='../images/takim';
$tmp_name=$_FILES['biofoto'] ["tmp_name"];
$name=$_FILES['biofoto'] ["name"];

$sayi=rand(1,1000);
$sayi2=rand(1,100);

$sayilar=$sayi.$sayi2;
$resimyolu=$sayilar.$name;

@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
$duzenle=$baglanti->prepare("UPDATE cahitcenksoy SET

		isim_soyisim=:isim_soyisim,
		unvan_tr=:unvan_tr,
		unvan_en=:unvan_en,
		unvan_ru=:unvan_ru,
		unvan_ar=:unvan_ar,
		unvan_de=:unvan_de,
		bio_tr=:bio_tr,
		bio_en=:bio_en,
		bio_ru=:bio_ru,
		bio_ar=:bio_ar,
		bio_de=:bio_de,
		cahit_foto=:cahit_foto
		

	WHERE id=$bio

		");

	$update=$duzenle->execute(array(

		
		'isim_soyisim'=>$_POST['isim'],
		'unvan_tr'=>$_POST['unvantr'],
		'unvan_en'=>$_POST['unvanen'],
		'unvan_ru'=>$_POST['unvanru'],
		'unvan_ar'=>$_POST['unvanar'],
		'unvan_de'=>$_POST['unvande'],
		'bio_tr'=>$_POST['biotr'],
		'bio_en'=>$_POST['bioen'],
		'bio_ru'=>$_POST['bioru'],
		'bio_ar'=>$_POST['bioar'],
		'bio_de'=>$_POST['biode'],
		'cahit_foto'=>$resimyolu
		

	));
	if($update) {
	
	header("Location:../cahitcenksoy.php?durum=basarili");
	}
	else{
	header("Location:../cahitcenksoy-duzenle.php?durum=basarisiz");
	}

  }
  else{
      $duzenle=$baglanti->prepare("UPDATE cahitcenksoy SET

		isim_soyisim=:isim_soyisim,
		unvan_tr=:unvan_tr,
		unvan_en=:unvan_en,
		unvan_ru=:unvan_ru,
		unvan_ar=:unvan_ar,
		unvan_de=:unvan_de,
		bio_tr=:bio_tr,
		bio_en=:bio_en,
		bio_ru=:bio_ru,
		bio_ar=:bio_ar,
		bio_de=:bio_de
	    
		

	WHERE id=$bio

		");

	$update=$duzenle->execute(array(

		
	    'isim_soyisim'=>$_POST['isim'],
		'unvan_tr'=>$_POST['unvantr'],
		'unvan_en'=>$_POST['unvanen'],
		'unvan_ru'=>$_POST['unvanru'],
		'unvan_ar'=>$_POST['unvanar'],
		'unvan_de'=>$_POST['unvande'],
		'bio_tr'=>$_POST['biotr'],
		'bio_en'=>$_POST['bioen'],
		'bio_ru'=>$_POST['bioru'],
		'bio_ar'=>$_POST['bioar'],
		'bio_de'=>$_POST['biode']

	));
	if($update) {
	
	header("Location:../cahitcenksoy.php?durum=basarili");
	}
	else{
	header("Location:../cahitcenksoy-duzenle.php?durum=basarisiz");
	}
  }
}





/**************tedavi icon ekleme**********/

if (isset($_POST['iconkaydet'])) {


$uploads_dir='../images/tedavi';
$tmp_name=$_FILES['iconfoto'] ["tmp_name"];
$name=$_FILES['iconfoto'] ["name"];

$sayi=rand(1,1000);
$sayi2=rand(1,100);

$sayilar=$sayi.$sayi2;
$resimyolu=$sayilar.$name;

@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
$ekle=$baglanti->prepare("INSERT into tedaviler SET

		tedavi_icon=:tedavi_icon
		
		");

	$insert=$ekle->execute(array(

	
		'tedavi_icon'=>$resimyolu

	));
	if($insert) {
	
	header("Location:../tedaviler.php?durum=basarili");
	}
	else{
	header("Location:../tedavi-ekle.php?durum=basarisiz");
	}

  }

/**************tedavi icon güncelle****************/

if (isset($_POST['iconduzenle'])) {

$tedavi=$_POST['tedavi_id'];

$uploads_dir='../images/tedavi';
$tmp_name=$_FILES['iconfoto'] ["tmp_name"];
$name=$_FILES['iconfoto'] ["name"];

$sayi=rand(1,1000);
$sayi2=rand(1,100);

$sayilar=$sayi.$sayi2;
$resimyolu=$sayilar.$name;

@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
$duzenle=$baglanti->prepare("UPDATE tedaviler SET

	tedavi_icon=:tedavi_icon
		
	WHERE id=$tedavi
		
		
	");

	$update=$duzenle->execute(array(

	
		'tedavi_icon'=>$resimyolu

	));
	if($update) {
	
	header("Location:../tedaviler.php?durum=basarili");
	}
	else{
	header("Location:../tedavi-duzenle.php?durum=basarisiz");
	}

}

/**************tedavi ekleme**********/

if(isset($_POST['tedavikaydet'])){
    
    $uploads_dir='../images/tedavi';
    $tmp_name=$_FILES['tedavifoto'] ["tmp_name"];
    $name=$_FILES['tedavifoto'] ["name"];

    $sayi=rand(1,1000);
    $sayi2=rand(1,100);

    $sayilar=$sayi.$sayi2;
    $resimyolu=$sayilar.$name;

    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
    
    $tedavikaydet=$baglanti->prepare("INSERT into tedaviler SET
    
        tedavi_baslik_tr=:tedavi_baslik_tr,
        tedavi_baslik_en=:tedavi_baslik_en,
        tedavi_baslik_ru=:tedavi_baslik_ru,
        tedavi_baslik_ar=:tedavi_baslik_ar,
        tedavi_baslik_de=:tedavi_baslik_de,
        tedavi_detay_tr=:tedavi_detay_tr,
        tedavi_detay_en=:tedavi_detay_en,
        tedavi_detay_ru=:tedavi_detay_ru,
        tedavi_detay_ar=:tedavi_detay_ar,
        tedavi_detay_de=:tedavi_detay_de,
        tedavi_giris_tr=:tedavi_giris_tr,
        tedavi_giris_en=:tedavi_giris_en,
        tedavi_giris_ru=:tedavi_giris_ru,
        tedavi_giris_ar=:tedavi_giris_ar,
        tedavi_giris_de=:tedavi_giris_de,
        tedavi_gorsel=:tedavi_gorsel
    
    ");
    
    $insert=$tedavikaydet->execute(array(

		'tedavi_baslik_tr'=>$_POST['basliktr'],
		'tedavi_baslik_en'=>$_POST['basliken'],
		'tedavi_baslik_ru'=>$_POST['baslikru'],
		'tedavi_baslik_ar'=>$_POST['baslikar'],
		'tedavi_baslik_de'=>$_POST['baslikde'],
		'tedavi_detay_tr'=>$_POST['detaytr'],
		'tedavi_detay_en'=>$_POST['detayen'],
		'tedavi_detay_ru'=>$_POST['detayru'],
		'tedavi_detay_ar'=>$_POST['detayar'],
		'tedavi_detay_de'=>$_POST['detayde'],
		'tedavi_giris_tr'=>$_POST['giristr'],
		'tedavi_giris_en'=>$_POST['girisen'],
		'tedavi_giris_ru'=>$_POST['girisru'],
		'tedavi_giris_ar'=>$_POST['girisar'],
		'tedavi_giris_de'=>$_POST['girisde'],
        'tedavi_gorsel'=>$resimyolu

	));
    
    if ($insert) {
	Header("Location:../tedaviler.php?durum=basarili");
	}
	else{
	Header("Location:../tedavi-ekle.php?durum=hata");
	}
}



/*********tedavi seçenekleri düzenleme************/

if (isset($_POST['tedaviduzenle'])) {

$tedavi=$_POST['tedavi_id'];	

if ($_FILES['tedavifoto']   ["size"]>0) {
$uploads_dir='../images/tedavi';
$tmp_name=$_FILES['tedavifoto'] ["tmp_name"];
$name=$_FILES['tedavifoto'] ["name"];

$sayi=rand(1,1000);
$sayi2=rand(1,100);

$sayilar=$sayi.$sayi2;
$resimyolu=$sayilar.$name;

@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
$duzenle=$baglanti->prepare("UPDATE tedaviler SET

	    tedavi_baslik_tr=:tedavi_baslik_tr,
        tedavi_baslik_en=:tedavi_baslik_en,
        tedavi_baslik_ru=:tedavi_baslik_ru,
        tedavi_baslik_ar=:tedavi_baslik_ar,
        tedavi_baslik_de=:tedavi_baslik_de,
        tedavi_detay_tr=:tedavi_detay_tr,
        tedavi_detay_en=:tedavi_detay_en,
        tedavi_detay_ru=:tedavi_detay_ru,
        tedavi_detay_ar=:tedavi_detay_ar,
        tedavi_detay_de=:tedavi_detay_de,
        tedavi_giris_tr=:tedavi_giris_tr,
        tedavi_giris_en=:tedavi_giris_en,
        tedavi_giris_ru=:tedavi_giris_ru,
        tedavi_giris_ar=:tedavi_giris_ar,
        tedavi_giris_de=:tedavi_giris_de,
        tedavi_gorsel=:tedavi_gorsel
		

	WHERE id=$tedavi

		");

	$update=$duzenle->execute(array(


		'tedavi_baslik_tr'=>$_POST['basliktr'],
		'tedavi_baslik_en'=>$_POST['basliken'],
		'tedavi_baslik_ru'=>$_POST['baslikru'],
		'tedavi_baslik_ar'=>$_POST['baslikar'],
		'tedavi_baslik_de'=>$_POST['baslikde'],
		'tedavi_detay_tr'=>$_POST['detaytr'],
		'tedavi_detay_en'=>$_POST['detayen'],
		'tedavi_detay_ru'=>$_POST['detayru'],
		'tedavi_detay_ar'=>$_POST['detayar'],
		'tedavi_detay_de'=>$_POST['detayde'],
		'tedavi_giris_tr'=>$_POST['tedavigiristr'],
		'tedavi_giris_en'=>$_POST['tedavigirisen'],
		'tedavi_giris_ru'=>$_POST['tedavigirisru'],
		'tedavi_giris_ar'=>$_POST['tedavigirisar'],
		'tedavi_giris_de'=>$_POST['tedavigirisde'],
        'tedavi_gorsel'=>$resimyolu
		
	

	));
	if($update) {
	
	header("Location:../tedaviler.php?durum=basarili");
	}
	else{
	header("Location:../tedavi-duzenle.php?durum=basarisiz");
	}

  }
  else{
      $duzenle=$baglanti->prepare("UPDATE tedaviler SET

		tedavi_baslik_tr=:tedavi_baslik_tr,
        tedavi_baslik_en=:tedavi_baslik_en,
        tedavi_baslik_ru=:tedavi_baslik_ru,
        tedavi_baslik_ar=:tedavi_baslik_ar,
        tedavi_baslik_de=:tedavi_baslik_de,
        tedavi_detay_tr=:tedavi_detay_tr,
        tedavi_detay_en=:tedavi_detay_en,
        tedavi_detay_ru=:tedavi_detay_ru,
        tedavi_detay_ar=:tedavi_detay_ar,
        tedavi_detay_de=:tedavi_detay_de,
        tedavi_giris_tr=:tedavi_giris_tr,
        tedavi_giris_en=:tedavi_giris_en,
        tedavi_giris_ru=:tedavi_giris_ru,
        tedavi_giris_ar=:tedavi_giris_ar,
        tedavi_giris_de=:tedavi_giris_de
		

	WHERE id=$tedavi

		");

	$update=$duzenle->execute(array(


		'tedavi_baslik_tr'=>$_POST['basliktr'],
		'tedavi_baslik_en'=>$_POST['basliken'],
		'tedavi_baslik_ru'=>$_POST['baslikru'],
		'tedavi_baslik_ar'=>$_POST['baslikar'],
		'tedavi_baslik_de'=>$_POST['baslikde'],
		'tedavi_detay_tr'=>$_POST['detaytr'],
		'tedavi_detay_en'=>$_POST['detayen'],
		'tedavi_detay_ru'=>$_POST['detayru'],
		'tedavi_detay_ar'=>$_POST['detayar'],
		'tedavi_detay_de'=>$_POST['detayde'],
		'tedavi_giris_tr'=>$_POST['tedavigiristr'],
		'tedavi_giris_en'=>$_POST['tedavigirisen'],
		'tedavi_giris_ru'=>$_POST['tedavigirisru'],
		'tedavi_giris_ar'=>$_POST['tedavigirisar'],
		'tedavi_giris_de'=>$_POST['tedavigirisde']

	));
	if($update) {
	
	header("Location:../tedaviler.php?durum=basarili");
	}
	else{
	header("Location:../tedavi-duzenle.php?durum=basarisiz");
	}
  }
}

/******tedavi silme************/

if (isset($_GET['tedavisil'])) {

$tedavisil=$baglanti->prepare("DELETE from tedaviler where id=:id");

$tedavisil->execute(array(

'id'=>$_GET['id']


	));
if ($tedavisil) {
	Header("Location:../tedaviler.php?durum=basarili");
}
else{
	Header("Location:../tedaviler.php?durum=hata");
	}
}


/***********yeni blog ekleme sayfası*********/

if (isset($_POST['blogkaydet'])) {
    
    
    $uploads_dir='../images/blog';
    $tmp_name=$_FILES['blogfoto'] ["tmp_name"];
    $name=$_FILES['blogfoto'] ["name"];
    
    $sayi=rand(1,1000);
    $sayi2=rand(1,100);
    
    $sayilar=$sayi.$sayi2;
    $resimyolu=$sayilar.$name;

    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

	$blogkaydet=$baglanti->prepare("INSERT into blog SET

		blog_baslik_tr=:blog_baslik_tr,
		blog_baslik_en=:blog_baslik_en,
		blog_baslik_ru=:blog_baslik_ru,
		blog_baslik_ar=:blog_baslik_ar,
		blog_baslik_de=:blog_baslik_de,
		blog_detay_tr=:blog_detay_tr,
		blog_detay_en=:blog_detay_en,
		blog_detay_ru=:blog_detay_ru,
		blog_detay_ar=:blog_detay_ar,
		blog_detay_de=:blog_detay_de,
		yazar=:yazar,
		gun=:gun,
		ay_tr=:ay_tr,
		ay_en=:ay_en,
		ay_ru=:ay_ru,
		ay_ar=:ay_ar,
		ay_de=:ay_de,
		yil=:yil,
		blog_foto=:blog_foto

		");
	
	$insert=$blogkaydet->execute(array(

		'blog_baslik_tr'=>$_POST['basliktr'],
		'blog_baslik_en'=>$_POST['basliken'],
		'blog_baslik_ru'=>$_POST['baslikru'],
		'blog_baslik_ar'=>$_POST['baslikar'],
		'blog_baslik_de'=>$_POST['baslikde'],
		'blog_detay_tr'=>$_POST['detaytr'],
		'blog_detay_en'=>$_POST['detayen'],
		'blog_detay_ru'=>$_POST['detayru'],
		'blog_detay_ar'=>$_POST['detayar'],
		'blog_detay_de'=>$_POST['detayde'],
		'yazar'=>$_POST['yazar'],
		'gun'=>$_POST['gun'],
		'ay_tr'=>$_POST['ay'],
		'ay_en'=>$_POST['ay_en'],
		'ay_ru'=>$_POST['ay_ru'],
		'ay_ar'=>$_POST['ay_ar'],
		'ay_de'=>$_POST['ay_de'],
		'yil'=>$_POST['yil'],
        'blog_foto'=>$resimyolu

	));

	if ($insert) {
	Header("Location:../blog.php?durum=basarili");
	}
	else{
	Header("Location:../blog-ekle.php?durum=hata");
	}


}

/*********blog bilgi düzenleme************/

if (isset($_POST['blogduzenle'])) {

$blog=$_POST['blog_id'];	

if ($_FILES['blogfoto']   ["size"]>0) {
$uploads_dir='../images/blog';
$tmp_name=$_FILES['blogfoto'] ["tmp_name"];
$name=$_FILES['blogfoto'] ["name"];

$sayi=rand(1,1000);
$sayi2=rand(1,100);

$sayilar=$sayi.$sayi2;
$resimyolu=$sayilar.$name;

@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
$duzenle=$baglanti->prepare("UPDATE blog SET

	    blog_baslik_tr=:blog_baslik_tr,
	    blog_baslik_en=:blog_baslik_en,
	    blog_baslik_ru=:blog_baslik_ru,
	    blog_baslik_ar=:blog_baslik_ar,
	    blog_baslik_de=:blog_baslik_de,
		blog_detay_tr=:blog_detay_tr,
		blog_detay_en=:blog_detay_en,
		blog_detay_ru=:blog_detay_ru,
		blog_detay_ar=:blog_detay_ar,
		blog_detay_de=:blog_detay_de,
		yazar=:yazar,
		gun=:gun,
		ay_tr=:ay_tr,
		ay_en=:ay_en,
		ay_ru=:ay_ru,
		ay_ar=:ay_ar,
		ay_de=:ay_de,
		yil=:yil,
		blog_foto=:blog_foto
		

	WHERE id=$blog

		");

	$update=$duzenle->execute(array(

	
		'blog_baslik_tr'=>$_POST['basliktr'],
		'blog_baslik_en'=>$_POST['basliken'],
		'blog_baslik_ru'=>$_POST['baslikru'],
		'blog_baslik_ar'=>$_POST['baslikar'],
		'blog_baslik_de'=>$_POST['baslikde'],
		'blog_detay_tr'=>$_POST['detaytr'],
		'blog_detay_en'=>$_POST['detayen'],
		'blog_detay_ru'=>$_POST['detayru'],
		'blog_detay_ar'=>$_POST['detayar'],
		'blog_detay_de'=>$_POST['detayde'],
		'yazar'=>$_POST['yazar'],
		'gun'=>$_POST['gun'],
		'ay_tr'=>$_POST['ay'],
		'ay_en'=>$_POST['ay_en'],
		'ay_ru'=>$_POST['ay_ru'],
		'ay_ar'=>$_POST['ay_ar'],
		'ay_de'=>$_POST['ay_de'],
		'yil'=>$_POST['yil'],
        'blog_foto'=>$resimyolu
		
	

	));
	if($update) {
	
	header("Location:../blog.php?durum=basarili");
	}
	else{
	header("Location:../blog-duzenle.php?durum=basarisiz");
	}

  }
  else{
      $duzenle=$baglanti->prepare("UPDATE blog SET

		blog_baslik_tr=:blog_baslik_tr,
	    blog_baslik_en=:blog_baslik_en,
	    blog_baslik_ru=:blog_baslik_ru,
	    blog_baslik_ar=:blog_baslik_ar,
	    blog_baslik_de=:blog_baslik_de,
		blog_detay_tr=:blog_detay_tr,
		blog_detay_en=:blog_detay_en,
		blog_detay_ru=:blog_detay_ru,
		blog_detay_ar=:blog_detay_ar,
		blog_detay_de=:blog_detay_de,
		yazar=:yazar,
		gun=:gun,
		ay_tr=:ay_tr,
		ay_en=:ay_en,
		ay_ru=:ay_ru,
		ay_ar=:ay_ar,
		ay_de=:ay_de,
		yil=:yil
		

	WHERE id=$blog

		");

	$update=$duzenle->execute(array(

		
	    'blog_baslik_tr'=>$_POST['basliktr'],
		'blog_baslik_en'=>$_POST['basliken'],
		'blog_baslik_ru'=>$_POST['baslikru'],
		'blog_baslik_ar'=>$_POST['baslikar'],
		'blog_baslik_de'=>$_POST['baslikde'],
		'blog_detay_tr'=>$_POST['detaytr'],
		'blog_detay_en'=>$_POST['detayen'],
		'blog_detay_ru'=>$_POST['detayru'],
		'blog_detay_ar'=>$_POST['detayar'],
		'blog_detay_de'=>$_POST['detayde'],
		'yazar'=>$_POST['yazar'],
		'gun'=>$_POST['gun'],
		'ay_tr'=>$_POST['ay'],
		'ay_en'=>$_POST['ay_en'],
		'ay_ru'=>$_POST['ay_ru'],
		'ay_ar'=>$_POST['ay_ar'],
		'ay_de'=>$_POST['ay_de'],
		'yil'=>$_POST['yil']


	));
	if($update) {
	
	header("Location:../blog.php?durum=basarili");
	}
	else{
	header("Location:../blog-duzenle.php?durum=basarisiz");
	}
  }
}

/******blog silme************/

if (isset($_GET['blogsil'])) {

$blogsil=$baglanti->prepare("DELETE from blog where id=:id");

$blogsil->execute(array(

'id'=>$_GET['id']


	));
if ($blogsil) {
	Header("Location:../blog.php?durum=basarili");
}
else{
	Header("Location:../blog.php?durum=hata");
	}
}




/*********blog resim silme***********************/

if (isset($_POST['blogresimsil'])) {

$yonlendir=$_POST['resimid'];

	$blogresimsil=$baglanti->prepare("DELETE from bloggorsel where id=:id ");

	$blogresimsil->execute(array(
		'id'=>$_POST['id']


	));

	if ($blogresimsil) {

		$resimsil=$_POST['image'];
		unlink("../images/blogdetay/$resimsil");
		header("Location:../blogresim.php?id=$yonlendir&yuklenme=basarili");
	}
	else{
			header("Location:../blogresim.php?id=$yonlendir&yuklenme=basarisiz");
	}
}












/***********kategori ekleme sayfası*********/

if (isset($_POST['kategorikaydet'])) {
    
	$kategorikaydet=$baglanti->prepare("INSERT into portfoykategori SET

		kategori_adi=:kategori_adi,
		kategori_adi_en=:kategori_adi_en,
		kategori_durum=:kategori_durum
		

		");
	
	$insert=$kategorikaydet->execute(array(

		'kategori_adi'=>$_POST['kataditr'],
		'kategori_adi_en'=>$_POST['katadien'],
		'kategori_durum'=>$_POST['durum']

	));

	if ($insert) {
	Header("Location:../portföy.php?durum=basarili");
	}
	else{
	Header("Location:../portföy-ekle.php?durum=hata");
	}
}

/***********kategori düzenleme sayfası*********/

if (isset($_POST['kategoriduzenle'])) {
    
$kategori=$_POST['kategoriid'];
    
	$kategoriduzenle=$baglanti->prepare("UPDATE portfoykategori SET

		kategori_adi=:kategori_adi,
		kategori_adi_en=:kategori_adi_en,
		kategori_durum=:kategori_durum
		
		WHERE kategori_id=$kategori
    
		");
	
	$update=$kategoriduzenle->execute(array(

		'kategori_adi'=>$_POST['kataditr'],
		'kategori_adi_en'=>$_POST['katadien'],
		'kategori_durum'=>$_POST['durum']

	));

	if ($update) {
	Header("Location:../portföy.php?durum=basarili");
	}
	else{
	Header("Location:../kategori-ekle.php?durum=hata");
	}


}

/******kategori silme************/

if (isset($_GET['kategorisil'])) {

$kategorisil=$baglanti->prepare("DELETE from portfoykategori where kategori_id=:kategori_id");

$kategorisil->execute(array(

'kategori_id'=>$_GET['id']


	));
if ($kategorisil) {
	Header("Location:../portföy.php?durum=basarili");
}
else{
	Header("Location:../portföy.php?durum=hata");
	}
}

/********portföy resim ekleme*******************/

if (isset($_POST['resimkaydet'])) {
    
$yonlendir=$_POST['katsid'];
    
    $uploads_dir='../images/portföy';
    $tmp_name=$_FILES['portföyfoto'] ["tmp_name"];
    $name=$_FILES['portföyfoto'] ["name"];
    
    $sayi=rand(1,1000000);
    $sayi2=rand(1,100000);
    
    $sayilar=$sayi.$sayi2;
    $resimyolu=$sayilar.$name;

    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

	$resimkaydet=$baglanti->prepare("INSERT into portfoy SET

        kategori_id=:kategori_id,
		resim_durum=:resim_durum,
		resim_adi=:resim_adi

		");
	
	$insert=$resimkaydet->execute(array(

        'kategori_id'=>$_POST['resimkategori'],
		'resim_durum'=>$_POST['durum'],
        'resim_adi'=>$resimyolu

	));

	if ($insert) {
	Header("Location:../resimler.php?katid=$yonlendir&yuklenme=basarili");
	}
	else{
	Header("Location:../resimler.php?katid=$yonlendir&yuklenme=basarisiz");
	}


}

/*********portföy resim düzenleme*******/

if (isset($_POST['resimduzenle'])) {
    
$yonlendir=$_POST['katsid'];
$resimid=$_POST['id'];	

if ($_FILES['portföyfoto']   ["size"]>0) {
$uploads_dir='../images/portföy';
$tmp_name=$_FILES['portföyfoto'] ["tmp_name"];
$name=$_FILES['portföyfoto'] ["name"];

$sayi=rand(1,1000000);
$sayi2=rand(1,100000);

$sayilar=$sayi.$sayi2;
$resimyolu=$sayilar.$name;

@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
$duzenle=$baglanti->prepare("UPDATE portfoy SET

	
	
		kategori_id=:kategori_id,
		resim_durum=:resim_durum,
		resim_adi=:resim_adi
		

	WHERE resim_id=$resimid

		");

	$update=$duzenle->execute(array(

	
		
		'kategori_id'=>$_POST['resimkategori'],
		'resim_durum'=>$_POST['durum'],
		'resim_adi'=>$resimyolu
		
	

	));
	if($update) {
	$resimsil=$_POST['eskiresim'];
	unlink("../images/portföy/$resimsil");
	header("Location:../resimler.php?katid=$yonlendir&yuklenme=basarili");
	}
	else{
	header("Location:../resimler.php?katid=$yonlendir&yuklenme=basarisiz");
	}

  }
  else{
      $duzenle=$baglanti->prepare("UPDATE portfoy SET

	
	
	    kategori_id=:kategori_id,
		resim_durum=:resim_durum
		

	WHERE resim_id=$resimid

		");

	$update=$duzenle->execute(array(

	
	    'kategori_id'=>$_POST['resimkategori'],
		'resim_durum'=>$_POST['durum']

	));
	if($update) {
	
	header("Location:../resimler.php?katid=$yonlendir&yuklenme=basarili");
	}
	else{
	header("Location:../resimler.php?katid=$yonlendir&yuklenme=basarisiz");
	}
  }
}

if (isset($_POST['resimsil'])){

$yonlendir=$_POST['katsid'];
    
    $resimsil=$baglanti->prepare("DELETE from portfoy where resim_id=:resim_id");
    $resimsil->execute(array(
    
    'resim_id'=>$_POST['id']
        
    ));
    if($resimsil){
        $resimsil=$_POST['resim'];
        unlink("../images/portföy/$resimsil");
        header("Location:../resimler.php?katid=$yonlendir&yuklenme=basarili");
    }else{
        header("Location:../resimler.php?katid=$yonlendir&yuklenme=basarisiz");
    }
    
}


/***********sayac düzenleme sayfası*********/

if (isset($_POST['sayacduzenle'])) {
    
$sayac=$_POST['sayac_id'];
    
	$sayacduzenle=$baglanti->prepare("UPDATE sayac SET

		deger1=:deger1,
		isim1=:isim1,
		isim1_en=:isim1_en,
		isim1_ru=:isim1_ru,
		isim1_ar=:isim1_ar,
		isim1_de=:isim1_de,
		deger2=:deger2,
		isim2=:isim2,
		isim2_en=:isim2_en,
		isim2_ru=:isim2_ru,
		isim2_ar=:isim2_ar,
		isim2_de=:isim2_de,
		basarioran2=:basarioran2,
		deger3=:deger3,
		isim3=:isim3,
		isim3_en=:isim3_en,
		isim3_ru=:isim3_ru,
		isim3_ar=:isim3_ar,
		isim3_de=:isim3_de,
		basarioran3=:basarioran3,
		deger4=:deger4,
		isim4=:isim4,
		isim4_en=:isim4_en,
		isim4_ru=:isim4_ru,
		isim4_ar=:isim4_ar,
		isim4_de=:isim4_de,
		basarioran4=:basarioran4,
		deger5=:deger5,
		isim5=:isim5,
		isim5_en=:isim5_en,
		isim5_ru=:isim5_ru,
		isim5_ar=:isim5_ar,
		isim5_de=:isim5_de,
		basarioran5=:basarioran5
		
		WHERE id=$sayac
    
		");
	
	$update=$sayacduzenle->execute(array(
        
        'deger1'=>$_POST['deger1'],
        'isim1'=>$_POST['isim1'],
        'isim1_en'=>$_POST['isim1en'],
        'isim1_ru'=>$_POST['isim1ru'],
        'isim1_ar'=>$_POST['isim1ar'],
        'isim1_de'=>$_POST['isim1de'],
        'deger2'=>$_POST['deger2'],
        'isim2'=>$_POST['isim2'],
        'isim2_en'=>$_POST['isim2en'],
        'isim2_ru'=>$_POST['isim2ru'],
        'isim2_ar'=>$_POST['isim2ar'],
        'isim2_de'=>$_POST['isim2de'],
        'basarioran2'=>$_POST['oran2'],
        'isim3'=>$_POST['isim3'],
        'isim3_en'=>$_POST['isim3en'],
        'isim3_ru'=>$_POST['isim3ru'],
        'isim3_ar'=>$_POST['isim3ar'],
        'isim3_de'=>$_POST['isim3de'],
        'deger3'=>$_POST['deger3'],
        'basarioran3'=>$_POST['oran3'],
        'isim4'=>$_POST['isim4'],
        'isim4_en'=>$_POST['isim4en'],
        'isim4_ru'=>$_POST['isim4ru'],
        'isim4_ar'=>$_POST['isim4ar'],
        'isim4_de'=>$_POST['isim4de'],
        'deger4'=>$_POST['deger4'],
        'basarioran4'=>$_POST['oran4'],
        'isim5'=>$_POST['isim5'],
        'isim5_en'=>$_POST['isim5en'],
        'isim5_ru'=>$_POST['isim5ru'],
        'isim5_ar'=>$_POST['isim5ar'],
        'isim5_de'=>$_POST['isim5de'],
        'deger5'=>$_POST['deger5'],
        'basarioran5'=>$_POST['oran5']
		

	));

	if ($update) {
	Header("Location:../randevu_sayac.php?durum=basarili");
	}
	else{
	Header("Location:../sayac-duzenle.php?durum=hata");
	}


}


/***********yeni tüp bebek yazı ekleme*********/

if (isset($_POST['tupbebekkaydet'])) {
    

	$tupbebekkaydet=$baglanti->prepare("INSERT into tupbebek SET

		yazi_baslik_tr=:yazi_baslik_tr,
		yazi_baslik_en=:yazi_baslik_en,
		yazi_baslik_ru=:yazi_baslik_ru,
		yazi_baslik_ar=:yazi_baslik_ar,
		yazi_baslik_de=:yazi_baslik_de,
		yazi_detay_tr=:yazi_detay_tr,
		yazi_detay_en=:yazi_detay_en,
		yazi_detay_ru=:yazi_detay_ru,
		yazi_detay_ar=:yazi_detay_ar,
		yazi_detay_de=:yazi_detay_de

		");
	
	$insert=$tupbebekkaydet->execute(array(

		'yazi_baslik_tr'=>$_POST['basliktr'],
		'yazi_baslik_en'=>$_POST['basliken'],
		'yazi_baslik_ru'=>$_POST['baslikru'],
		'yazi_baslik_ar'=>$_POST['baslikar'],
		'yazi_baslik_de'=>$_POST['baslikde'],
		'yazi_detay_tr'=>$_POST['detaytr'],
		'yazi_detay_en'=>$_POST['detayen'],
		'yazi_detay_ru'=>$_POST['detayru'],
		'yazi_detay_ar'=>$_POST['detayar'],
		'yazi_detay_de'=>$_POST['detayde']
		

	));

	if ($insert) {
	Header("Location:../tupbebek.php?durum=basarili");
	}
	else{
	Header("Location:../tupbebek-ekle.php?durum=hata");
	}


}

/********* tüpbebek yazı düzenleme************/

if (isset($_POST['tupbebekduzenle'])) {

$tupbebek=$_POST['tupbebek_id'];	


$duzenle=$baglanti->prepare("UPDATE tupbebek SET

	    yazi_baslik_tr=:yazi_baslik_tr,
	    yazi_baslik_en=:yazi_baslik_en,
	    yazi_baslik_ru=:yazi_baslik_ru,
	    yazi_baslik_ar=:yazi_baslik_ar,
	    yazi_baslik_de=:yazi_baslik_de,
		yazi_detay_tr=:yazi_detay_tr,
		yazi_detay_en=:yazi_detay_en,
		yazi_detay_ru=:yazi_detay_ru,
		yazi_detay_ar=:yazi_detay_ar,
		yazi_detay_de=:yazi_detay_de
		
		

	WHERE id=$tupbebek

		");

	$update=$duzenle->execute(array(

	
		'yazi_baslik_tr'=>$_POST['basliktr'],
		'yazi_baslik_en'=>$_POST['basliken'],
		'yazi_baslik_ru'=>$_POST['baslikru'],
		'yazi_baslik_ar'=>$_POST['baslikar'],
		'yazi_baslik_de'=>$_POST['baslikde'],
		'yazi_detay_tr'=>$_POST['detaytr'],
		'yazi_detay_en'=>$_POST['detayen'],
		'yazi_detay_ru'=>$_POST['detayru'],
		'yazi_detay_ar'=>$_POST['detayar'],
		'yazi_detay_de'=>$_POST['detayde']
		
		
	

	));
	if($update) {
	
	header("Location:../tupbebek.php?durum=basarili");
	}
	else{
	header("Location:../tupbebek-duzenle.php?durum=basarisiz");
	}

  }
  


/******tüp bebek yazi silme************/

if (isset($_GET['tupbebeksil'])) {

$tupbebeksil=$baglanti->prepare("DELETE from tupbebek where id=:id");

$tupbebeksil->execute(array(

'id'=>$_GET['id']


	));
if ($tupbebeksil) {
	Header("Location:../tupbebek.php?durum=basarili");
}
else{
	Header("Location:../tupbebek.php?durum=hata");
	}
}


/*********tüp bebek resim silme***********************/

if (isset($_POST['tupbebekresimsil'])) {

$yonlendir=$_POST['resimid'];

	$tupbebekresimsil=$baglanti->prepare("DELETE from tupbebekgorsel where id=:id ");

	$tupbebekresimsil->execute(array(
		'id'=>$_POST['id']


	));

	if ($tupbebekresimsil) {

		$resimsil=$_POST['image'];
		unlink("../images/tupbebek/$resimsil");
		header("Location:../tupbebekresim.php?id=$yonlendir&yuklenme=basarili");
	}
	else{
			header("Location:../tupbebekresim.php?id=$yonlendir&yuklenme=basarisiz");
	}
}

/***********sözlük yeni terim ekleme*********/

if (isset($_POST['sozlukkaydet'])) {
    

	$sozlukkaydet=$baglanti->prepare("INSERT into tupbebeksozluk SET

		terim_tr=:terim_tr,
		terim_en=:terim_en,
		terim_ru=:terim_ru,
		terim_ar=:terim_ar,
		terim_de=:terim_de,
		aciklama_tr=:aciklama_tr,
		aciklama_en=:aciklama_en,
		aciklama_ru=:aciklama_ru,
		aciklama_ar=:aciklama_ar,
		aciklama_de=:aciklama_de

		");
	
	$insert=$sozlukkaydet->execute(array(

		'terim_tr'=>$_POST['terimtr'],
		'terim_en'=>$_POST['terimen'],
		'terim_ru'=>$_POST['terimru'],
		'terim_ar'=>$_POST['terimar'],
		'terim_de'=>$_POST['terimde'],
		'aciklama_tr'=>$_POST['aciklamatr'],
		'aciklama_en'=>$_POST['aciklamaen'],
		'aciklama_ru'=>$_POST['aciklamaru'],
		'aciklama_ar'=>$_POST['aciklamaar'],
		'aciklama_de'=>$_POST['aciklamade']
		

	));

	if ($insert) {
	Header("Location:../sozluk.php?durum=basarili");
	}
	else{
	Header("Location:../sozlukterim-ekle.php?durum=hata");
	}


}

/********* sözlük yazı düzenleme************/

if (isset($_POST['sozlukduzenle'])) {

$sozluk=$_POST['sozluk_id'];	


$duzenle=$baglanti->prepare("UPDATE tupbebeksozluk SET

	    terim_tr=:terim_tr,
	    terim_en=:terim_en,
	    terim_ru=:terim_ru,
	    terim_ar=:terim_ar,
	    terim_de=:terim_de,
		aciklama_tr=:aciklama_tr,
		aciklama_en=:aciklama_en,
		aciklama_ru=:aciklama_ru,
		aciklama_ar=:aciklama_ar,
		aciklama_de=:aciklama_de
		

	WHERE id=$sozluk

		");

	$update=$duzenle->execute(array(

	
		'terim_tr'=>$_POST['terimtr'],
		'terim_en'=>$_POST['terimen'],
		'terim_ru'=>$_POST['terimru'],
		'terim_ar'=>$_POST['terimar'],
		'terim_de'=>$_POST['terimde'],
		'aciklama_tr'=>$_POST['aciklamatr'],
		'aciklama_en'=>$_POST['aciklamaen'],
		'aciklama_ru'=>$_POST['aciklamaru'],
		'aciklama_ar'=>$_POST['aciklamaar'],
		'aciklama_de'=>$_POST['aciklamade']
		
	));
	if($update) {
	
	header("Location:../sozluk.php?durum=basarili");
	}
	else{
	header("Location:../sozluk-duzenle.php?durum=basarisiz");
	}

  }
  


/******sozluk terim silme************/

if (isset($_GET['sozluksil'])) {

$sozluksil=$baglanti->prepare("DELETE from tupbebeksozluk where id=:id");

$sozluksil->execute(array(

'id'=>$_GET['id']


	));
if ($sozluksil) {
	Header("Location:../sozluk.php?durum=basarili");
}
else{
	Header("Location:../sozluk.php?durum=hata");
	}
}




/***********sizden gelenler yazı ekleme*********/

if (isset($_POST['sizdengelenkaydet'])) {
    

	$sizdengelenkaydet=$baglanti->prepare("INSERT into sizdengelen SET

	
		isim=:isim,
		aciklama_tr=:aciklama_tr,
		aciklama_en=:aciklama_en,
		aciklama_ru=:aciklama_ru,
		aciklama_ar=:aciklama_ar,
		aciklama_de=:aciklama_de

		");
	
	$insert=$sizdengelenkaydet->execute(array(

		
		'isim'=>$_POST['ad'],
		'aciklama_tr'=>$_POST['detaytr'],
		'aciklama_en'=>$_POST['detayen'],
		'aciklama_ru'=>$_POST['detayru'],
		'aciklama_ar'=>$_POST['detayar'],
		'aciklama_de'=>$_POST['detayde']
		

	));

	if ($insert) {
	Header("Location:../sizdengelen.php?durum=basarili");
	}
	else{
	Header("Location:../sizdengelen-ekle.php?durum=hata");
	}


}

/********* sizden gelen yazı düzenleme************/

if (isset($_POST['sizdengelenduzenle'])) {

$sizdengelen=$_POST['sizdengelen_id'];	


$duzenle=$baglanti->prepare("UPDATE sizdengelen SET

	    isim=:isim,
		aciklama_tr=:aciklama_tr,
		aciklama_en=:aciklama_en,
		aciklama_ru=:aciklama_ru,
		aciklama_ar=:aciklama_ar,
		aciklama_de=:aciklama_de
		

	WHERE id=$sizdengelen

		");

	$update=$duzenle->execute(array(

		'isim'=>$_POST['ad'],
		'aciklama_tr'=>$_POST['detaytr'],
		'aciklama_en'=>$_POST['detayen'],
		'aciklama_ru'=>$_POST['detayru'],
		'aciklama_ar'=>$_POST['detayar'],
		'aciklama_de'=>$_POST['detayde']


	));
	if($update) {
	
	header("Location:../sizdengelen.php?durum=basarili");
	}
	else{
	header("Location:../sizdengelen-duzenle.php?durum=basarisiz");
	}

  }
  


/******sizden gelen yazi silme************/

if (isset($_GET['sizdengelensil'])) {

$sizdengelensil=$baglanti->prepare("DELETE from sizdengelen where id=:id");

$sizdengelensil->execute(array(

'id'=>$_GET['id']


	));
if ($sizdengelensil) {
	Header("Location:../sizdengelen.php?durum=basarili");
}
else{
	Header("Location:../sizdengelen.php?durum=hata");
	}
}


/*********sizden gelenler resim silme***********************/

if (isset($_POST['referansresimsil'])) {

$yonlendir=$_POST['resimid'];

	$sizdengelenresimsil=$baglanti->prepare("DELETE from sizdengelengorsel where id=:id ");

	$sizdengelenresimsil->execute(array(
		'id'=>$_POST['id']


	));

	if ($sizdengelenresimsil) {

		$resimsil=$_POST['image'];
		unlink("../images/sizdengelen/$resimsil");
		header("Location:../sizdengelenresim.php?id=$yonlendir&yuklenme=basarili");
	}
	else{
			header("Location:../sizdengelenresim.php?id=$yonlendir&yuklenme=basarisiz");
	}
}


/***********yeni otel ekleme sayfası*********/

if (isset($_POST['otelkaydet'])) {
    
    
    $uploads_dir='../images/otel';
    $tmp_name=$_FILES['otelfoto'] ["tmp_name"];
    $name=$_FILES['otelfoto'] ["name"];
    
    $sayi=rand(1,100);
    $sayi2=rand(1,100);
    
    $sayilar=$sayi.$sayi2;
    $resimyolu=$sayilar.$name;

    @move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

	$otelkaydet=$baglanti->prepare("INSERT into anlasmalioteller SET

		otel_isim_tr=:otel_isim_tr,
		otel_isim_en=:otel_isim_en,
		otel_isim_ru=:otel_isim_ru,
		otel_isim_ar=:otel_isim_ar,
		otel_isim_de=:otel_isim_de,
		otel_aciklama_tr=:otel_aciklama_tr,
		otel_aciklama_en=:otel_aciklama_en,
		otel_aciklama_ru=:otel_aciklama_ru,
		otel_aciklama_ar=:otel_aciklama_ar,
		otel_aciklama_de=:otel_aciklama_de,
		otel_link=:otel_link,
		otel_logo=:otel_logo

		");
	
	$insert=$otelkaydet->execute(array(

		'otel_isim_tr'=>$_POST['isimtr'],
		'otel_isim_en'=>$_POST['isimen'],
		'otel_isim_ru'=>$_POST['isimru'],
		'otel_isim_ar'=>$_POST['isimar'],
		'otel_isim_de'=>$_POST['isimde'],
		'otel_aciklama_tr'=>$_POST['aciklamatr'],
		'otel_aciklama_en'=>$_POST['aciklamaen'],
		'otel_aciklama_ru'=>$_POST['aciklamaru'],
		'otel_aciklama_ar'=>$_POST['aciklamaar'],
		'otel_aciklama_de'=>$_POST['aciklamade'],
		'otel_link'=>$_POST['link'],
        'otel_logo'=>$resimyolu

	));

	if ($insert) {
	Header("Location:../anlasmaliotel.php?durum=basarili");
	}
	else{
	Header("Location:../otel-ekle.php?durum=hata");
	}


}

/*********otel düzenleme************/

if (isset($_POST['otelduzenle'])) {

$otel=$_POST['otel_id'];	

if ($_FILES['otelfoto']   ["size"]>0) {
$uploads_dir='../images/otel';
$tmp_name=$_FILES['otelfoto'] ["tmp_name"];
$name=$_FILES['otelfoto'] ["name"];

$sayi=rand(1,100);
$sayi2=rand(1,100);

$sayilar=$sayi.$sayi2;
$resimyolu=$sayilar.$name;

@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");
$duzenle=$baglanti->prepare("UPDATE anlasmalioteller SET

	   
		otel_link=:otel_link,
		otel_isim_tr=:otel_isim_tr,
		otel_isim_en=:otel_isim_en,
		otel_isim_ru=:otel_isim_ru,
		otel_isim_ar=:otel_isim_ar,
		otel_isim_de=:otel_isim_de,
		otel_aciklama_tr=:otel_aciklama_tr,
		otel_aciklama_en=:otel_aciklama_en,
		otel_aciklama_ru=:otel_aciklama_ru,
		otel_aciklama_ar=:otel_aciklama_ar,
		otel_aciklama_de=:otel_aciklama_de,
		otel_logo=:otel_logo
		

	WHERE id=$otel

		");

	$update=$duzenle->execute(array(

		'otel_link'=>$_POST['link'],
		'otel_isim_tr'=>$_POST['isimtr'],
		'otel_isim_en'=>$_POST['isimen'],
		'otel_isim_ru'=>$_POST['isimru'],
		'otel_isim_ar'=>$_POST['isimar'],
		'otel_isim_de'=>$_POST['isimde'],
		'otel_aciklama_tr'=>$_POST['aciklamatr'],
		'otel_aciklama_en'=>$_POST['aciklamaen'],
		'otel_aciklama_ru'=>$_POST['aciklamaru'],
		'otel_aciklama_ar'=>$_POST['aciklamaar'],
		'otel_aciklama_de'=>$_POST['aciklamade'],
        'otel_logo'=>$resimyolu

	));
	if($update) {
	
	header("Location:../anlasmaliotel.php?durum=basarili");
	}
	else{
	header("Location:../otel-duzenle.php?durum=basarisiz");
	}

  }
  else{
      $duzenle=$baglanti->prepare("UPDATE anlasmalioteller SET

	
	    otel_link=:otel_link,
		otel_isim_tr=:otel_isim_tr,
		otel_isim_en=:otel_isim_en,
		otel_isim_ru=:otel_isim_ru,
		otel_isim_ar=:otel_isim_ar,
		otel_isim_de=:otel_isim_de,
		otel_aciklama_tr=:otel_aciklama_tr,
		otel_aciklama_en=:otel_aciklama_en,
		otel_aciklama_ru=:otel_aciklama_ru,
		otel_aciklama_ar=:otel_aciklama_ar,
		otel_aciklama_de=:otel_aciklama_de
		

	WHERE id=$otel

		");

	$update=$duzenle->execute(array(

		'otel_link'=>$_POST['link'],
		'otel_isim_tr'=>$_POST['isimtr'],
		'otel_isim_en'=>$_POST['isimen'],
		'otel_isim_ru'=>$_POST['isimru'],
		'otel_isim_ar'=>$_POST['isimar'],
		'otel_isim_de'=>$_POST['isimde'],
		'otel_aciklama_tr'=>$_POST['aciklamatr'],
		'otel_aciklama_en'=>$_POST['aciklamaen'],
		'otel_aciklama_ru'=>$_POST['aciklamaru'],
		'otel_aciklama_ar'=>$_POST['aciklamaar'],
		'otel_aciklama_de'=>$_POST['aciklamade']
		

	));
	if($update) {
	
	header("Location:../anlasmaliotel.php?durum=basarili");
	}
	else{
	header("Location:../otel-duzenle.php?durum=basarisiz");
	}
  }
}

/******otel silme************/

if (isset($_GET['otelsil'])) {

$otelsil=$baglanti->prepare("DELETE from anlasmalioteller where id=:id");

$otelsil->execute(array(

'id'=>$_GET['id']


	));
if ($otelsil) {
	Header("Location:../anlasmaliotel.php?durum=basarili");
}
else{
	Header("Location:../anlasmaliotel.php?durum=hata");
	}
}
/******anlaşmalı oteller sayfası giriş metni düzenleme************/

if (isset($_POST['girismetniduzenle'])) {

if ($_FILES['gorsel']   ["size"]>0) {
$uploads_dir='../images/otel';
$tmp_name=$_FILES['gorsel'] ["tmp_name"];
$name=$_FILES['gorsel'] ["name"];

$sayi=rand(1,100);
$sayi2=rand(1,10);

$sayilar=$sayi.$sayi2;
$resimyolu=$sayilar.$name;

@move_uploaded_file($tmp_name, "$uploads_dir/$sayilar$name");

$duzenle=$baglanti->prepare("UPDATE otelsayfasi_detay SET

		girismetni_tr=:girismetni_tr,
		girismetni_en=:girismetni_en,
		girismetni_ru=:girismetni_ru,
		girismetni_ar=:girismetni_ar,
		girismetni_de=:girismetni_de,
		gorsel=:gorsel

		");

	$update=$duzenle->execute(array(

		'girismetni_tr'=>$_POST['girisyazisi'],
		'girismetni_en'=>$_POST['girisyazisien'],
		'girismetni_ru'=>$_POST['girisyazisiru'],
		'girismetni_ar'=>$_POST['girisyazisiar'],
		'girismetni_de'=>$_POST['girisyaziside'],
		'gorsel'=>$resimyolu
	

	));
	if($update) {
	
	header("Location:../anlasmaliotel.php?durum=basarili");
	}
	else{
	header("Location:../otel_girismetni.php?durum=basarisiz");
	}
  }
  else{
      $duzenle=$baglanti->prepare("UPDATE otelsayfasi_detay SET

	    girismetni_tr=:girismetni_tr,
		girismetni_en=:girismetni_en,
		girismetni_ru=:girismetni_ru,
		girismetni_ar=:girismetni_ar,
		girismetni_de=:girismetni_de

		");

	$update=$duzenle->execute(array(

		'girismetni_tr'=>$_POST['girisyazisi'],
		'girismetni_en'=>$_POST['girisyazisien'],
		'girismetni_ru'=>$_POST['girisyazisiru'],
		'girismetni_ar'=>$_POST['girisyazisiar'],
		'girismetni_de'=>$_POST['girisyaziside']

	));
	if($update) {
	
	header("Location:../anlasmaliotel.php?durum=basarili");
	}
	else{
	header("Location:../otel_girismetni.php?durum=basarisiz");
	}
  }

}


/***********yeni soru ekleme*********/

if (isset($_POST['sorukaydet'])) {
    

	$sorukaydet=$baglanti->prepare("INSERT into faq SET

		soru_tr=:soru_tr,
		cevap_tr=:cevap_tr,
		soru_en=:soru_en,
		cevap_en=:cevap_en,
		soru_ru=:soru_ru,
		cevap_ru=:cevap_ru,
        soru_ar=:soru_ar,
		cevap_ar=:cevap_ar,
		soru_de=:soru_de,
		cevap_de=:cevap_de
		
		");
	
	$insert=$sorukaydet->execute(array(

		'soru_tr'=>$_POST['sorutr'],
		'cevap_tr'=>$_POST['cevaptr'],
		'soru_en'=>$_POST['soruen'],
		'cevap_en'=>$_POST['cevapen'],
		'soru_ru'=>$_POST['soruru'],
		'cevap_ru'=>$_POST['cevapru'],
		'soru_ar'=>$_POST['soruar'],
		'cevap_ar'=>$_POST['cevapar'],
		'soru_de'=>$_POST['sorude'],
		'cevap_de'=>$_POST['cevapde']
		

	));

	if ($insert) {
	Header("Location:../faq.php?durum=basarili");
	}
	else{
	Header("Location:../faq-ekle.php?durum=hata");
	}


}

/********* soru düzenleme************/

if (isset($_POST['soruduzenle'])) {

$soru=$_POST['soru_id'];	


$duzenle=$baglanti->prepare("UPDATE faq SET

	    soru_tr=:soru_tr,
		cevap_tr=:cevap_tr,
		soru_en=:soru_en,
		cevap_en=:cevap_en,
		soru_ru=:soru_ru,
		cevap_ru=:cevap_ru,
		soru_ar=:soru_ar,
		cevap_ar=:cevap_ar,
		soru_de=:soru_de,
		cevap_de=:cevap_de
		
		

	WHERE id=$soru

		");

	$update=$duzenle->execute(array(

	
		'soru_tr'=>$_POST['sorutr'],
		'cevap_tr'=>$_POST['cevaptr'],
		'soru_en'=>$_POST['soruen'],
		'cevap_en'=>$_POST['cevapen'],
		'soru_ru'=>$_POST['soruru'],
		'cevap_ru'=>$_POST['cevapru'],
		'soru_ar'=>$_POST['soruar'],
		'cevap_ar'=>$_POST['cevapar'],
		'soru_de'=>$_POST['sorude'],
		'cevap_de'=>$_POST['cevapde']
		

	));
	if($update) {
	
	header("Location:../faq.php?durum=basarili");
	}
	else{
	header("Location:../faq-duzenle.php?durum=basarisiz");
	}

  }
  


/******soru silme************/

if (isset($_GET['sorusil'])) {

$sorusil=$baglanti->prepare("DELETE from faq where id=:id");

$sorusil->execute(array(

'id'=>$_GET['id']


	));
if ($sorusil) {
	Header("Location:../faq.php?durum=basarili");
}
else{
	Header("Location:../faq.php?durum=hata");
	}
}


/*************kıbrıs tüp bebek tedavisi düzenleme***************/

if (isset($_POST['kibristedaviduzenle'])) {

$tedavi=$_POST['tupbebektedavi_id'];	

$duzenle=$baglanti->prepare("UPDATE kibristupbebektedavisi SET

		basliktr=:basliktr,
		basliken=:basliken,
		baslikru=:baslikru,
		baslikar=:baslikar,
		baslikde=:baslikde,
	    iceriktr=:iceriktr,
		iceriken=:iceriken,
		icerikru=:icerikru,
		icerikar=:icerikar,
		icerikde=:icerikde
		

	WHERE id=$tedavi

		");

	$update=$duzenle->execute(array(

	
		'basliktr'=>$_POST['basliktr'],
		'basliken'=>$_POST['basliken'],
		'baslikru'=>$_POST['baslikru'],
		'baslikar'=>$_POST['baslikar'],
		'baslikde'=>$_POST['baslikde'],
		'iceriktr'=>$_POST['iceriktr'],
		'iceriken'=>$_POST['iceriken'],
		'icerikru'=>$_POST['icerikru'],
		'icerikar'=>$_POST['icerikar'],
		'icerikde'=>$_POST['icerikde']
		

	));
	if($update) {
	
	header("Location:../kibristupbebektedavisi.php?durum=basarili");
	}
	else{
	header("Location:../kibristedavi-duzenle.php?durum=basarisiz");
	}

}



?>