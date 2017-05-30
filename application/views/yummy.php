<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yummy</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/FeaturesYummy.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/FooterYummy.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/stylesYummy.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/Contact-FormYummy.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="<?php echo base_url().'Admin'?>">Yummy </a>
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
    <div class="jumbotron" style="background-image: url('<?php echo base_url();?>assets/img/jumbotron-yummy.jpg')">
        <h1 class="h1jumbo">Usir rasa laparmu!</h1>
        <p class="pjumbo">Pilih makanan favoritmu dan usir jauh-jauh rasa laparmu!</p>
    </div>
    <h1 class="headmenu">MENU TERBARU</h1>
    <div>
        <div class="container">
            <div class="row">
                <?php foreach ($data as $d) {?>
                <div class="col-md-4">
                    <h2 class="namamenu"><?php echo $d['nama_menu'];?></h2>
                    <img class="img menu" style="width:200px; height:180px" src="<?php echo base_url()."gambar/".$d['gambar'] ?>">
                    <p class="paramenu"><?php echo $d['deskripsi'];?></p>
                    <h3 class="headharga"><?php echo "Rp ".number_format($d['harga'], 0, "," , ".") ?></h3>
                    <div class="btnpesan">
                        <a href="<?php echo base_url().'MyController/yummypesan/'.$d['id_menu']; ?>">
                          <button class="btn btn-default" type="button">Pesan sekarang</button>
                        </a>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>

    <div class="features-clean">
        <div class="container">
            <div class="intro">
                <hr>
            </div>
            <div class="row features">
                <div class="col-md-4 col-sm-6 item"><i class="glyphicon glyphicon-map-marker icon"></i>
                    <h3 class="name">Harga terjangkau</h3>
                    <p class="description">Harga - harga yang ditawarkan oleh Yummy Eatery tentunya sangat bersahabat dengan dompetmu.</p>
                </div>
                <div class="col-md-4 col-sm-6 item"><i class="glyphicon glyphicon-time icon"></i>
                    <h3 class="name">Rasa tiada duanya</h3>
                    <p class="description">Harga terjangkau, namun kami tetap menjaga kualitas rasa dari makanan kami.</p>
                </div>
                <div class="col-md-4 col-sm-6 item"><i class="glyphicon glyphicon-list-alt icon"></i>
                    <h3 class="name">Mudah didapat</h3>
                    <p class="description">Tinggal hubungi kami pada kontak yang tersedia, maka kami akan segera mengantarkan makanan ke tempat Anda, khusus bagi kalian yang berdomisili di Surabaya.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-clean">
        <form action="<?php echo base_url().'MyController/insert_feedback' ?>" method="post">
            <h2 class="text-center">Feedback </h2>
            <div class="form-group has-success has-feedback">
                <input class="form-control" type="text" name="nama" placeholder="Name">
            </div>
            <div class="form-group has-error has-feedback">
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <textarea class="form-control" rows="14" name="pesan" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" value="send">
            </div>
        </form>
    </div>
    <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 item">
                        <h3 class="footabout">Tentang </h3>
                        <ul>
                            <li><a href="<?php echo base_url();?>MyController/yummyabout">Yummy Eatery</a></li>
                            <li><a href="<?php echo base_url();?>MyController/yummytim">Founder</a></li>
                            <li><a href="<?php echo base_url();?>MyController/yummytestim">Testimoni</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 yummy contact">
                        <h3 class="yummy-footer-h3">Yummy Eatery</h3>
                        <p class="footer parakontak">+62 82231376570</p>
                    </div>
                    <div class="col-md-3 col-md-offset-0 item social">
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
