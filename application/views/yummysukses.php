<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yummy</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/FooterSukses.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/stylesSukses.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="<?php echo base_url().'Home'?>">Yummy </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li role="presentation"><a href="<?php echo base_url().'Home'?>">MENU </a></li>
                    <li role="presentation"><a href="<?php echo base_url();?>MyController/yummyabout">TENTANG </a></li>
                </ul>
            </div>
        </div>
    </nav><img class="sukses img">
    <h1 class="sukses h1">Pesanan Anda diterima. Harap tunggu.</h1>
    <p class="sukses p">Terima kasih telah memesan di Yummy Eatery! Klik tombol di bawah untuk kembali ke halaman utama.</p>
    <div class="btnkembali">
        <a href="<?php echo base_url();?>Home">
          <button class="btn btn-default" type="button">KEMBALI</button>
        </a>
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
                    <div class="col-md-6 col-sm-4 item"><img class="sukses footer img">
                        <p class="sukses p">+62 85xxxxxx</p>
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
