<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Solid State</title>
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ionicons.min.css">
        <link href="https://fonts.googleapis.com/css?family=Istok+Web:400,400i,700,700i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/css/main.css" rel="stylesheet">

    </head>
<body>
    <!-- preloader -->
    <div id="preloader"></div>
    <!-- end of preloader -->

    <div class="body-content" style="display:none;">
        <div class="navbar-solid-state">
             <!-- Header -->
            <header id="header" class="alt">
                <!-- <h1><a href="index.html" class="a-transparent">Solid State</a></h1> -->
                <nav>
                    <a href="#menu" class="a-menu">Menu <i class="ion-android-menu"></i> </a>
                </nav>
            </header>

            <!-- Menu -->
            <nav id="menu">
                <div class="inner">
                    <h2>Menu</h2>
                    <ul class="links">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="<?php echo base_url(); ?>Main/login">Login</a></li>
                        <!-- <li><a href="#">Log In</a></li>
                        <li><a href="#">Sign Up</a></li> -->
                    </ul>
                    <a href="#" class="close">Close</a>
                </div>
            </nav>
        </div>

        <section id="banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>FEEL THE FREE AND GREEN SENSATION</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12"> 
                        <p>ANOTHER FREE + FULLY RESPONSIVE SITE TEMPLATE BY <a href="http://www.themewagon.com">THEMEWAGON</a></p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-banner">DEFAULT</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="one">
            <div class="container">
                <div class="one-features">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="section-highlight">
                                <h2>GUNAKAN STIK, HEMPASKAN BOLA SEJAUH MUNGKIN</h2>
                            </div>
                            <div class="section-details">
                                <p>
                                    Ada tiga tipe stik golf (club) yaitu: wood, iron, dan putter. Wedge adalah iron yang digunakan untuk memukul pada jarak yang pendek. Wood digunakan untuk memukul jarak yang sangat jauh. Sedangkan iron pada jarak menengah. Putter hampir selalu digunakan untuk melakukan pukulan di atas green.
                                </p>
                                <a href="#" class="btn btn-learn-more">LEARN MORE <i class="ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php echo base_url(); ?>assets/images/golf-stick.png" alt="Responsive image" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="two">
            <div class="container">
                <div class="two-features">
                    <div class="row">
                        <div class="col-md-4">
                        <img src="<?php echo base_url(); ?>assets/images/shoes.png" alt="Responsive image" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <div class="section-highlight">
                                <h2>SEPATU TERBAIK SAAT MENGINJAK RUMPUT?</h2>
                            </div>
                            <div class="section-details">
                                <p>
                                    Sepatu sangat penting digunakan dalam olahraga ini, selain lapangan yang sangat luas dan hempasan bola yang terbilang jauh maka mengharuskan kita juga untuk berjalan mengitari lapangan.
                                    Oleh karena itu sepatu yang kece dapat membuat kamu terlihat elegan saat memainkan olahraga ini.
                                </p>
                                <a href="#" class="btn btn-learn-more">LEARN MORE <i class="ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="three">
            <div class="container">
                <div class="three-features">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="section-highlight">
                                <h2>MENGAPA MENGGUNAKAN TOPI?</h2>
                            </div>
                            <div class="section-details">
                                <p>
                                    Topi termasuk hal opsional, karena melindungi kita dari terik matahari yang panas dilapangan golf, sehingga disarankan untuk kamu yang memainkan olahraga ini untuk menggunakan topi yang kece juga.
                                </p>
                                <a href="#" class="btn btn-learn-more">LEARN MORE <i class="ion-ios-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img src="<?php echo base_url(); ?>assets/images/hat.png" alt="Responsive image" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="four">
                <div class="container">
                    <div class="four-top">
                        <div class="section-heading">
                            <div class="title">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2>PELAJARI LEBIH LANJUT</h2>
                                    </div>
                                </div>
                            </div>

                            <div class="subtitle">
                                <div class="row">                                       
                                    <div class="col-md-9 col-md-offset-1">
                                        <p>
                                            Kita menyediakan beberapa sumber terkait olahraga golf yang dapat membantu kamu dalam memahami olahraga ini secara seksama.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <?php foreach ($sql->result() as $obj){ ?>
                        <div class="col-md-6">
                            <div class="four-features">
                                <div class="features-img">
                                    <img src="<?php echo $obj->img; ?>" alt="Responsive image" class="img-content">
                                </div>
                                <div class="features-content">
                                    <h3><?php echo $obj->title; ?></h3>
                                    <p>
                                    <?php 
                                    echo $obj->content;?>
                                    </p>
                                    <a href="<?php echo base_url();?>Main/detail/<?php echo $obj->id ?>" class="btn btn-learn-more">LEARN MORE <i class="ion-ios-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" class="btn btn-expand-all">EXPAND ALL</a>
                        </div>
                    </div>
                </div>
        </section>

        <section id="footer">
            <div class="container">
                <div class="footer-top">
                    <div class="section-heading">
                        <div class="title">
                            <div class="row">
                                <div class="col-md-12">
                                <h2>GET IN TOUCH</h2>
                                </div>
                            </div>
                        </div>
                        <div class="subtitle">
                            <div class="row">
                                <div class="col-md-9 col-md-offset-1">
                                    <p>
                                    Lorem ipsum dolor sit amet, etiam lorem adipiscing elit. Cras turpis ante, nullam sit amet turpis non, sollicitudin posuere urna.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-features">
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <div class="form-group">
                                    <input type="text" name="name name" class="form-control form-footer" placeholder="Name" required="">
                                </div>
                                <div class="form-group">
                                    <input type="email" required="" class="form-control form-footer" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control form-footer" rows="5" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="btn btn-solid-state">Send Message</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-list">
                                <ul class="list-unstyled">
                                    <li class="list-table">
                                        <i class="ion-ios-home"></i><p>Untitled Inc 1234 Somewhere Road Suite #2894 Nashville, TN 00000-0000</p>
                                    </li>
                                    <li class="list-table">
                                        <i class="ion-android-call"></i><p>(+440) 103-5554</p>
                                    </li>
                                    <li class="list-table">
                                        <i class="ion-email"></i><p>information@mail.com</p>
                                    </li>
                                </ul>
                                <div class="list-solid-state">
                                    <ul class="list-inline">
                                        <li>
                                            <a href="#"><i class="ion-social-facebook icon-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-twitter icon-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-linkedin icon-linkedin"></i></a>
                                        </li>
                                        <li>
                                            <i class="ion-aperture icon-aperture"></i>
                                        </li>
                                        <li>
                                            <i class="ion-social-rss icon-rss"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="row">
                        <div class="col-md-12">
                            <p>&copy; TECHNEXT 2016. ALL RIGHTS RESERVED BY <a href="http://www.themewagon.com" target="_blank">THEMEWAGON</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>


</body>
  
</html>