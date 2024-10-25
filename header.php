<?php
session_start();

include "islem/baglanti.php";
$kullanicisor=$baglanti->prepare("SELECT * from kullanici where kullanici_adi=:kullanici_adi");
$kullanicisor->execute(array(

'kullanici_adi'=>$_SESSION['girisbelgesi']

	));

$var=$kullanicisor->rowCount();

if($var==0){
    Header("Location:giris.php?durum=izinsizgiris");
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cahit Cenksoy Admin</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css" />
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/jquery-bar-rating/fontawesome-stars-o.css">
    <link rel="stylesheet" href="vendors/jquery-bar-rating/fontawesome-stars.css">
    <!-- End plugin css for this page -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/6.5.95/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <!---dropzone--->
    <link rel="stylesheet" href="css/dropzone.css">
    <script type="text/javascript" src="js/dropzone.js"></script>
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject 
    <link rel="shortcut icon" href="images/favicon.png" />-->
    <style>
        .takim{
            width:800px;
            height:300px;
            margin-top:30px;
            background:#F3E5F5;
        }
        .takim img{
            float:left;
            text-align:center;
            margin-top:15px !important;
        }
        .takim h5{
           padding-top:35px !important;
        }
        .takim h6{
           margin-top:20px;
        }
        .takim i{
            color:white;
            background:purple;
            padding:5px 5px 5px 5px;
            border-radius:15px;
        }
        .tedavi{
            width:800px;
            height:100%;
            margin-top:30px;
            background:#F3E5F5;
        }
        .tedavi p{
            margin-left:10px;
        }
        .tedavi h5{
            margin-left:10px;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <!--<h6 style="color:white">cahitcenksoy.com</h6>-->
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            </div>
        </nav>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <div class="card" style="background:#F3E5F5">
                    <div class="user-profile">
                    <img src="images/logo/menulogoyeni.png">
                    </div>
                </div>
                
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                           <i class="fa-solid fa-house"></i>
                            <span class="menu-title" style="margin-left:5px"> Ana sayfa</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                            <i class="fa-brands fa-chrome"></i>
                            <span class="menu-title" style="margin-left:5px">Web Sitesi</span>
                            <i class="menu-arrow"></i>
                        </a>
                        <div class="collapse" id="ui-basic">
                            <ul class="nav flex-column sub-menu">
                                <li class="nav-item"> <a class="nav-link" href="slider.php">Slider</a></li>
                                <li class="nav-item"> <a class="nav-link" href="banner.php">Site Banner</a></li>
                                <li class="nav-item"> <a class="nav-link" href="hakkimizda.php">Hakkımızda</a></li>
                                <li class="nav-item"> <a class="nav-link" href="iletisim.php">İletişim Bilgileri</a></li>
                                <li class="nav-item"> <a class="nav-link" href="logo.php">Logo ve Favicon</a></li>
                                <li class="nav-item"> <a class="nav-link" href="randevu_sayac.php">Randevu & Sayaç</a></li>
                                
                                
                                
                                
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="takim.php">
                            <i class="fa-solid fa-users"></i>
                            <span class="menu-title" style="margin-left:5px">Ekibimiz</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cahitcenksoy.php">
                            <i class="fa-solid fa-user"></i>
                            <span class="menu-title" style="margin-left:5px">Cahit Cenksoy</span>
                        </a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="portföy.php">
                           <i class="fa-solid fa-images"></i>
                            <span class="menu-title" style="margin-left:5px">Portföy</span>
                        </a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="tedaviler.php">
                            <i class="fa-solid fa-pills"></i>
                            <span class="menu-title" style="margin-left:5px">Tedavi Seçenekleri</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="anlasmaliotel.php">
                            <i class="fa-solid fa-home"></i>
                            <span class="menu-title" style="margin-left:5px">Anlaşmalı Oteller</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tupbebek.php">
                            <i class="fa-solid fa-baby"></i>
                            <span class="menu-title" style="margin-left:5px">Tüp Bebek</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sozluk.php">
                            <i class="fa-solid fa-spell-check"></i>
                            <span class="menu-title" style="margin-left:5px">Tüp Bebek Sözlük</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sizdengelen.php">
                            <i class="fa-solid fa-images"></i>
                            <span class="menu-title" style="margin-left:5px">Sizden Gelenler</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.php">
                           <i class="fa-solid fa-book-open-reader"></i>
                            <span class="menu-title" style="margin-left:5px">Güncel</span>
                        </a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="kullanici.php">
                           <i class="fa-solid fa-user"></i>
                            <span class="menu-title" style="margin-left:5px">Panel Kullanıcıları</span>
                        </a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="cikis.php">
                           <i class="fa-solid fa-close"></i>
                            <span class="menu-title" style="margin-left:5px">Çıkış Yap</span>
                        </a>
                    </li>
                </ul>
            </nav>