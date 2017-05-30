<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimoni Yummy Eatery</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/FooterTestim.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/stylesTestim.css">
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
    <h1 class="headtestim">TESTIMONIAL </h1>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <img class="img-circle" width="200px" src="<?php echo base_url();?>assets/img/chintiabudi.jpg">
                    <h1 class="h1 namatestim">Chintia Budi</h1>
                    <p class="p testim">Kamu anak Surabaya? Atau perantau yg tinggal di Surabaya? Butuh makanan yg gak ngebosenin dan gitu-gitu aja? Yummy Eatery aja dah, dijamin gaakan nyesel pesen makan di sini! Selain rasanya enak banget, harganya juga terjangkau apalagi untuk mahasiswa yg emang duitnya pas-pasan hihihi</p>
                </div>
                <div class="col-md-4">
                    <img class="img-circle" width="200px" src="<?php echo base_url();?>assets/img/ojan.jpg">
                    <h1 class="h1 namatestim">Fauzan Pinantyo</h1>
                    <p class="p testim">Makanannya enak-enak, kebetulan aku suka banget sama ayam-ayaman, apalagi variasinya banyak banget di sini, jadi pengen nyobain semuanya hehe mantab djiwa lah pokoknya</p>
                </div>
                <div class="col-md-4">
                    <img class="img-circle" width="200px" src="<?php echo base_url();?>assets/img/farah.JPG">
                    <h1 class="h1 namatestim">Farah Adita</h1>
                    <p class="p testim">Gak akan nyesel kok kalian beli makan di Yummy Eatery, harganya terjangkau banget, menunya cocok buat segala umur pula. Bener-bener solusi buat kalian yg pengen cari makan enak tapi gak ngebosenin. Recommended pol laaah</p>
                </div>
            </div>
        </div>
    </div>
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
