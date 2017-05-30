<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Yummy Eatery</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/FooterAbout.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/stylesAbout.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="<?php echo base_url().'Home'?>">Yummy </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li role="presentation"><a href="<?php echo base_url();?>Home">MENU</a></li>
                    <li role="presentation"><a href="<?php echo base_url();?>MyController/yummyabout">TENTANG</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <section>
        <div>
            <div class="row">
                <div class="col-md-12">
                    <h1 class="headabout">ABOUT YUMMY EATERY</h1></div>
            </div>
        </div>
    </section>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6"><img class="aboutpic" src="<?php echo base_url();?>assets/img/yummy.jpg"></div>
                <div class="col-md-6">
                    <p class="p about">Yummy Eatery merupakan salah satu penyedia nasi kotak di Surabaya yang mengkhususkan menunya dengan lauk ayam. Ada banyak sekali variasi menu ayam yang pastinya gak akan bikin kamu bosen. </p>
                    <p class="p about">Dibuat pada tahun 2015 oleh seorang mahasiswi Ilmu Komunikasi Universitas Airlangga, Nabila G. Mohede atau yang biasa dipanggil Nabila, merasa resah dengan keluhan-keluhan dari teman-temannya bahwa makanan yang ada di kantin kampus mereka hanya itu-itu saja. Akhirnya tercetuslah ide untuk membuat jasa makanan yang bahannya tidak sulit, namun dapat divariasikan sehingga walaupun memiliki kesamaan dalam hal bahan pokok namun tidak sampai merasa bosan. Atas dasar itulah Yummy Eatery dibuat.</p>
                </div>
            </div>
        </div>
    </div>
<!--
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                </div>
            </div>
        </div>
    </div>
-->
    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 item">
                        <h3>Tentang </h3>
                        <ul>
                          <li><a href="<?php echo base_url();?>MyController/yummyabout">Yummy Eatery</a></li>
                          <li><a href="<?php echo base_url();?>MyController/yummytim">Founder</a></li>
                          <li><a href="<?php echo base_url();?>MyController/yummytestim">Testimoni</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-4 item">
                        <h3 class="yummy-footer-h3">Yummy Eatery</h3>
                        <p class="footer p kontak">+62 82231376570</p>
                    </div>
                    <div class="col-md-3 item social">
                      <a href="#"><i class="icon ion-social-facebook"></i></a>
                      <a href="#"><i class="icon ion-social-twitter"></i></a>
                      <a href="https://www.instagram.com/yummyeatery.sby/" target="_blank"><i class="icon ion-social-instagram"></i></a>
                      <p class="copyright">Yummy Eatery© 2017</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
