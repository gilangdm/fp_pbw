<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yummy</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/Registration-Form-Pesan.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/FooterPesan.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/stylesPesan.css">
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
    <div class="register-photo">
        <div class="form-container">
            <div></div><img>
            <h1><?php echo $nama_menu; ?></h1>
            <p class="pesan p"><?php echo $deskripsi; ?></p>
            <p class="pesan p">Kamu sudah dapat membelinya seharga <?php echo "Rp ".number_format($harga, 0, "," , ".") ?>/porsi.</p>
            <form action="<?php echo base_url().'MyController/yummysukses/'.$id_menu; ?>" method="post">
                <h2 class="text-center">Data Pemesan</h2>
                <input class="form-control" type="text" name="nama_pemesan" placeholder="Nama Lengkap" required>
                <div class="form-group"></div>
                <input class="form-control" type="tel" name="no_telp" placeholder="Kontak" required>
                <div class="form-group"></div>
                <input class="form-control" type="text" name="alamat" placeholder="Alamat" required>
                <div class="form-group"></div>
                <input class="form-control" type="number" min="1" name="jumlah" placeholder="Porsi" required>
                <div class="form-group"></div>
                <div class="form-group">
                    <input class="btn btn-primary btn-block" type="submit" value="PESAN">
                </div>
            </form>
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
                        <p class="footer pesan p">+62 82231376570</p>
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
